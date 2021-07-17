<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Client;
use File;
class ClientsController extends Controller
{
    protected $clients;

    public function __construct(
        Client $clients
    )
    {
        $this->clients=$clients;
    }
  
    public function index(Request $request)
    { 
        if($request->ajax())
        {
            return $this->clients->clientList($request);
        }
        
        return view('clients.index');
        
    }
  
    public function create()
    {
        return view('clients.create');
    }

    
    public function store(Request $request)
    {
    
        
        $this->validate($request,[
            'title'=>'required',
            'image.*'=>'required'
            //'description'                             =>'description',
        ]);
            
       
        // try
        // {
            DB::beginTransaction();
            $image_path='';
            if($file=$request->file('image'))
            {
            
                 //$path=time().'.'.request()->image->getClientOriginalExtension();
                $image_path = time().'-'.rand(1,100).'.'.$file->extension();
                $file->move(public_path('uploads/clients'), $image_path);  
                // echo $name;
                
            }
           
            $data=[
                'title'                             =>$request->get('title'),
                'image'                             =>$image_path,
            ]; 
            $result=Client::create($data);
        
             
               
            
          
            DB::commit();
            return redirect()->route('clients.index')->with('toastrDefaultSuccess',__(''));
        // }
        // catch(\Exception $e)
        // {
        //     DB::rollBack();
        //     return redirect()->back();
        // } 
    }

  
    public function show($id)
    {
        //
    }

     
    public function clientsEdit(Request $request,$id=0)
    {
        if($id)
        {
           // dd($id);
            $clients=$this->clients->find($id);
            
            return view('clients.edit',compact('clients'));
        }//
    }

   
    public function clientsUpdate(Request $request, $id)
    {
        
        if($id)
        //print_r($id);exit;
      {
          $this->validate($request,[
              'title'                             =>'required',
          ]);
          try
          {
              DB::beginTransaction();
              $data=[
                'title'                             =>$request->get('title'),
                //'image'  

              ];
              //dd($data);
              $clients=$this->clients->find($id);
              $clients->update($data);
              if($files=$request->file('image'))
              {
                  $file=public_path('uploads/clients/'.$clients->image);
                  if(File::exists($file))
                  {
                      File::delete($file);
                  }
                  $name=time().'.'.request()->image->getClientOriginalExtension();
                  $files->move(public_path('uploads/clients'), $name);
                  $clients->update([
                      'image'=>$name
                  ]);
              }
              DB::commit();
              return redirect()->route('clients.index')->with('success');
          }
          catch(\Exception $e)
          {
              DB::rollBack();
              return redirect()->back();
          }
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function clientsDelete($id)
    {
        $result=$this->clients->where('id', $id)->delete();
       
        return back();
    }
}
