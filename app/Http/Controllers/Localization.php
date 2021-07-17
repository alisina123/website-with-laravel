<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class Localization extends Controller
{
    public function lang_change(Request $request,$lang)
    {
        App::setLocale($lang);
        session()->put('locale', $lang);  
        return redirect()->back();
        
    }
}
