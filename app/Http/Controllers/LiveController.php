<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LiveController extends Controller
{
    
  
     //affichage 
     public function index(){
       
        return view('client.live.index');
    }

}






