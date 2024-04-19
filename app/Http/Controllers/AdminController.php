<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 

class AdminController extends Controller
{



    //afficher dashboard admin
    
    public function dashboard(){


        $restaurantCount = User::where('role', 'user')->count();
        return view('admin.dashboard', ['restaurantCount' => $restaurantCount]);
    }
}
