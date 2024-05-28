<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminController extends Controller
{



    //afficher dashboard admin
    
    public function dashboard(){


        $restaurantCount = User::where('role', 'user')->count();


       // Récupérer le nombre d'utilisateurs par gouvernorat, exclure les utilisateurs avec le rôle admin
        $usersByRegion = User::select('governorate', DB::raw('count(*) as total'))
        ->where('role', '!=', 'admin')
        ->groupBy('governorate')
        ->pluck('total', 'governorate');


            // Comptage des utilisateurs actifs et non actifs
            $activeUsers = User::where('active', 'active')->where('role', '!=', 'admin')->count();
            $inactiveUsers = User::where('active', 'not active')->count();

        

        return view('admin.dashboard', compact('usersByRegion' ,'activeUsers','inactiveUsers'), ['restaurantCount' => $restaurantCount]);
    }
}
