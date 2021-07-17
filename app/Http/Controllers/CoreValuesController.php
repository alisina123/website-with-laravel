<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CoreValue;
use File;
class CoreValuesController extends Controller
{
    
    protected $coreValue;

    public function __construct(
        CoreValue $coreValue
    )
    {
        $this->coreValue=$coreValue;
    }
  
    public function index(Request $request)
    { 
        if($request->ajax())
        {
            return $this->coreValue->coreValueList($request);
        }
        
        return view('coreValue.index');
        
    }
  
    public function create()
    {
        return view('coreValue.create');
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
                $file->move(public_path('uploads/coreValue'), $image_path);  
                // echo $name;
                
            }
           
            $data=[
                'title'                             =>$request->get('title'),
                'description'                        =>$request->get('description'),
                'image'                             =>$image_path,
                'lang'=>\App::getLocale()
            ]; 
            $result=CoreValue::create($data);
        
             
               
            
          
            DB::commit();
            return redirect()->route('coreValue.index')->with('toastrDefaultSuccess',__(''));
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

     
    public function coreValueEdit(Request $request,$id=0)
    {
        if($id)
        {
           // dd($id);
            $coreValue=$this->coreValue->find($id);
            
            return view('coreValue.edit',compact('coreValue'));
        }//
    }

   
    public function coreValueUpdate(Request $request, $id)
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
              $coreValue=$this->coreValue->find($id);
              $coreValue->update($data);
              if($files=$request->file('image'))
              {
                  $file=public_path('uploads/coreValue/'.$coreValue->image);
                  if(File::exists($file))
                  {
                      File::delete($file);
                  }
                  $name=time().'.'.request()->image->getClientOriginalExtension();
                  $files->move(public_path('uploads/coreValue'), $name);
                  $coreValue->update([
                      'image'=>$name
                  ]);
              }
              DB::commit();
              return redirect()->route('coreValue.index')->with('success');
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
    public function coreValueDelete($id)
    {
        $result=$this->coreValue->where('id', $id)->delete();
       
        return back();
    }
}
