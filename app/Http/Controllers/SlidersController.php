<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use File;
class SlidersController extends Controller
{
     
    protected $slider;

    public function __construct(
        Slider $slider
    )
    {
        $this->slider=$slider;
    }
  
    public function index(Request $request)
    { 
        if($request->ajax())
        {
            return $this->slider->sliderList($request);
        }
        
        return view('slider.index');
           
    }
  
    public function create()
    {
        return view('slider.create');
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
                $file->move(public_path('uploads/slider'), $image_path);  
                // echo $name;
                
            }
           
            $data=[
                'title'                             =>$request->get('title'),
                'image'                             =>$image_path,
            ]; 
            $result=Slider::create($data);
        
             
               
            
          
            DB::commit();
            return redirect()->route('slider.index')->with('toastrDefaultSuccess',__(''));
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

     
    public function sliderEdit(Request $request,$id=0)
    {
        if($id)
        {
           // dd($id);
            $slider=$this->slider->find($id);
            
            return view('slider.edit',compact('slider'));
        }//
    }

   
    public function sliderUpdate(Request $request, $id)
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
                //'lang'=>\App::getLocale()
                //'image'  

              ];
              //dd($data);
              $slider=$this->slider->find($id);
              $slider->update($data);
              if($files=$request->file('image'))
              {
                  $file=public_path('uploads/slider/'.$slider->image);
                  if(File::exists($file))
                  {
                      File::delete($file);
                  }
                  $name=time().'.'.request()->image->getClientOriginalExtension();
                  $files->move(public_path('uploads/slider'), $name);
                  $slider->update([
                      'image'=>$name
                  ]);
              }
              DB::commit();
              return redirect()->route('slider.index')->with('success');
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
    public function sliderDelete($id)
    {
        $result=$this->slider->where('id', $id)->delete();
       
        return back();
    }
}
