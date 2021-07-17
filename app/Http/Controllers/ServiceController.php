<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Service;
use File;
class ServiceController extends Controller
{ 
    
    protected $services;

    public function __construct(
        Service $services
    )
    {
        $this->services=$services;
    }
  
    public function index(Request $request)
    { 
        if($request->ajax())
        {
            return $this->services->serviceList($request);
        }
        
        return view('services.index');
        
    }
  
    public function create()
    {
        return view('services.create');
    }

    
    public function store(Request $request)
    {
    
        
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
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
                $file->move(public_path('uploads/services'), $image_path);  
                // echo $name;
                
            }
           
            $data=[
                'title'                             =>$request->get('title'),
                'description'                        =>$request->get('description'),
                'image'                             =>$image_path,
                'lang'=>\App::getLocale()
            ]; 
            $result=Service::create($data);
        
             
               
            
          
            DB::commit();
            return redirect()->route('services.index')->with('toastrDefaultSuccess',__(''));
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

     
    public function servicesEdit(Request $request,$id=0)
    {
        if($id)
        {
           // dd($id);
            $services=$this->services->find($id);
            
            return view('services.edit',compact('services'));
        }//
    }

   
    public function servicesUpdate(Request $request, $id)
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
                'description'                        =>$request->get('description'),
                'lang'=>\App::getLocale()
                //'image'  

              ];
              //dd($data);
              $services=$this->services->find($id);
              $services->update($data);
              if($files=$request->file('image'))
              {
                  $file=public_path('uploads/services/'.$services->image);
                  if(File::exists($file))
                  {
                      File::delete($file);
                  }
                  $name=time().'.'.request()->image->getClientOriginalExtension();
                  $files->move(public_path('uploads/services'), $name);
                  $services->update([
                      'image'=>$name
                  ]);
              }
              DB::commit();
              return redirect()->route('services.index')->with('success');
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
    public function servicesDelete($id)
    {
        $result=$this->services->where('id', $id)->delete();
       
        return back();
    }
}
