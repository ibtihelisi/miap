<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    
     //affichage 
     public function index(){
       
        return view('client.menu.index');
    }

}
