<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use File;
class AboutController extends Controller
{
    protected $about;

    public function __construct(
        AboutUs $about
    )
    {
        $this->about=$about;
    }
  
    public function index(Request $request)
    {
        if($request){
        $search=\Request::get('Search'); 
        $about=DB::table('about')->where('lang',\App::getLocale())
    
        ->where('about_us','like','%'.$search.'%')
        ->paginate(6);
        return view('about.index',compact('about'));
        }
    }

    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
        ///print_r([$request]);
        $this->validate($request,[
            'about_us'                             =>'required',
        ]);
        try
        {
            DB::beginTransaction();
            $path='';
            if($files=$request->file('image'))
            {
                $path=time().'.'.request()->image->getClientOriginalExtension();
                $files->move(public_path('uploads/about'), $path);
               
            }
            $data=[
                'about_us'                     =>$request->get('about_us'),
                'phone'                          =>$request->get('phone'),
                'ceo'                             =>$request->get('ceo'),
                'email'                          =>$request->get('email'),
                'address'                          =>$request->get('address'),
                'info'                          =>$request->get('info'),
                'history'                        =>$request->get('history'),
                'vision'                       =>$request->get('vision'),
                'mission'                      =>$request->get('mission'),
                'image'                         =>$path,
                'lang'=>\App::getLocale()
                //'mimage'                         =>$path

                
            ];
           // dd($data);exit;
            $result = $this->about->create($data);
            DB::commit();
            return redirect()->route('about.index')->with('success',__('msg.uSuccess'));
        }
        catch(\Exception $e)
        {
            DB::rollBack();
            return redirect()->back();
        } 
    }

    
    public function Aedit(Request $request,$id=0)
    {
        if($id)
        {
            $about=$this->about->find($id);
          //  print_r($about);exit;
            return view('about.edit',compact('about'));
        }//
    }

    public function Aupdate(Request $request, $id)
    {
          
        if($id)
        //print_r($id);exit;
      {
          $this->validate($request,[
              'about_us'                             =>'required',
          ]);
          try
          {
                DB::beginTransaction();
                $data=[
                    'about_us'                     =>$request->get('about_us'),
                    'phone'                          =>$request->get('phone'),
                    'ceo'                             =>$request->get('ceo'),
                    'email'                          =>$request->get('email'),
                    'address'                          =>$request->get('address'),
                    'info'                          =>$request->get('info'),
                    'history'                        =>$request->get('history'),
                    'vision'                       =>$request->get('vision'),
                    'mission'                      =>$request->get('mission'),
                    'lang'=>\App::getLocale()
  
                ];
               
             // dd($data['business_model']);
              $about=$this->about->find($id);
              $about->update($data);
              if($files=$request->file('image'))
              {
                  $file=public_path('uploads/about/'.$about->image);
                  if(File::exists($file))
                  {
                      File::delete($file);
                  }
                  $name=time().'.'.request()->image->getClientOriginalExtension();
                  $files->move(public_path('uploads/about'), $name);
                  $about->update([
                      'image'=>$name
                  ]);
              }
              DB::commit();
              return redirect()->route('about.index')->with('success');
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
    public function destroy($id)
    {
        $result=$this->about->where('id', $id)->delete();
       
        return back();
    }
}
