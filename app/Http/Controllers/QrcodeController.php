<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QrcodeController extends Controller
{
    //



    
    public function index()
    {
           // Récupérer l'utilisateur connecté
           $user = Auth::user();

           // Récupérer les catégories de l'utilisateur connecté
           $qrcode = $user->qrcode;
           
         
    
        return view('client.qrcode.index', compact('qrcode'));
    }
}
