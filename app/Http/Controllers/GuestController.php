<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Demo;
use App\Models\Features;
use App\Models\Subscription;
use App\Models\Setting;
use App\Models\Why;
use App\Models\faq;
use App\Models\Contact;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //

    public function home(){
        $subscriptions= Subscription::all();//pour récupere tout les produit de la base de donnés
        
        $setting = Setting::findOrFail(1); // Récupérez les paramètres (Setting) nécessaires pour la vue

        $feature = Features::findOrFail(1);
        $features = Features::all();

        $whies=Why::all();

        $demo = Demo::findOrFail(1);

        $feature = Features::findOrFail(1);
        $features = Features::all();

        $faq = faq::findOrFail(1);
        $faqs = faq::all();

       

        return view('guest.home', compact('subscriptions', 'setting','feature','features','whies','demo','faq','faqs')); // Passez les données à la vue
  
    }
}
