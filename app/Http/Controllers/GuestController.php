<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    //

    public function home(){
        $subscriptions= Subscription::all();//pour récupere tout les produit de la base de donnés
        return view('guest.home')->with('subscriptions', $subscriptions);
    }
}
