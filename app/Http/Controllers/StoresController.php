<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Store;
use File;
class StoresController extends Controller
{
     
    protected $storeValue;

    public function __construct(
        Store $storeValue
    )
    {
        $this->storeValue=$storeValue;
    }
  
    public function index(Request $request)
    { 
        if($request->ajax())
        {
            return $this->storeValue->store_valueList($request);
        }
        
        return view('storeValue.index');
           
    }
  
    public function create()
    {
        return view('storeValue.create');
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
                $file->move(public_path('uploads/storeValue'), $image_path);  
                // echo $name;
                
            }
           
            $data=[
                'title'                             =>$request->get('title'),
                'description'                        =>$request->get('description'),
                'image'                             =>$image_path,
                'lang'=>\App::getLocale()
            ]; 
            $result=Store::create($data);
        
             
               
            
          
            DB::commit();
            return redirect()->route('storeValue.index')->with('toastrDefaultSuccess',__(''));
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

     
    public function storeValueEdit(Request $request,$id=0)
    {
        if($id)
        {
           // dd($id);
            $storeValue=$this->storeValue->find($id);
            
            return view('storeValue.edit',compact('storeValue'));
        }//
    }

   
    public function storeValueUpdate(Request $request, $id)
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
              $storeValue=$this->storeValue->find($id);
              $storeValue->update($data);
              if($files=$request->file('image'))
              {
                  $file=public_path('uploads/storeValue/'.$storeValue->image);
                  if(File::exists($file))
                  {
                      File::delete($file);
                  }
                  $name=time().'.'.request()->image->getClientOriginalExtension();
                  $files->move(public_path('uploads/storeValue'), $name);
                  $storeValue->update([
                      'image'=>$name
                  ]);
              }
              DB::commit();
              return redirect()->route('storeValue.index')->with('success');
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
    public function storeValueDelete($id)
    {
        $result=$this->storeValue->where('id', $id)->delete();
       
        return back();
    }
}
