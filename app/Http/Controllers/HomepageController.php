<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use file;
use App\Models\Slider;
use App\Models\Service;
use App\Models\CoreValue;
use App\Models\Client;
use App\Models\Project;
use App\Models\AboutUs;
class HomepageController extends Controller
{

    public $slider;
    public $service;
    public $coreValue;
    public function __construct(
        Slider $sliders,
        Service $service,
        CoreValue $coreValue
    )
    {
        $this->slider=DB::table('sliders')->get();

    }
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
       $clients=DB::table('clinets')->get();
       $project=DB::table('project')->where('lang',\App::getLocale())->limit(3)->get();
       $service=DB::table('services')->where('lang',\App::getLocale())->get();
       $core_value=DB::table('core_value')->where('lang',\App::getLocale())->limit(3)->get();
        return view('home.index',['slider' => $this->slider,'service'=> $service,'core_value'=>$core_value,'clients'=>$clients,'project'=>$project]);
    }

    public function allServices(Request $request)
    {
        $service=DB::table('services')->where('lang',\App::getLocale())->orderBy('id','DESC')->paginate(6);
        return view('frontend.allServices',['service'=>$service,'slider' => $this->slider])
        ->with('i', ($request->input('page', 1) - 1) * 6);;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function aboutUs(Request $request)
    {
       $about=DB::table('about')->where('lang',\App::getLocale())->get();
       return view('frontend.about',['slider' => $this->slider,'about'=> $about]);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function service_details(Request $request, $id=0)
    {   $service=DB::table('services')->where('lang',\App::getLocale())->get();
        $services=DB::table('services')->where('id','=',$id)->get();
        return view('frontend.serviceDetails',['slider' => $this->slider,'services'=> $services,'service'=>$service]);
        
    }
    public function destroy($id)
    {
        //
    }
}
