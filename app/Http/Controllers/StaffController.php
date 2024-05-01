<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    //
    
    public function index(){

        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Récupérer les catégories de l'utilisateur connecté
        $staffs = $user->staffs;
       
        return view('client.staff.index', compact('staffs'));
    }

}
