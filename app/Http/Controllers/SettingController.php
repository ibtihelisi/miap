<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
      //affichage de a liste
     public function index(){
        $settings=Setting::all();
        return view('admin.settings.index')->with('settings',$settings);
    }
    

}
