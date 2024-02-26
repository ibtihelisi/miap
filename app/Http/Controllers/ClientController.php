<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    


     //affichage client dashboard
     public function dashboard(){
        return view('client.dashboard');
    }
}
