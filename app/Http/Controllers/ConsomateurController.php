<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Item;
use App\Models\Commande;
use App\Models\LigneCommande;
use App\Models\Consommateur;
use Illuminate\Support\Facades\Auth;



class ConsomateurController extends Controller
{
    //


      //affichage de a liste
      public function index($id){
        $users=User::all();
        $user = User::find($id);
        $categories=Category::all();
        $items=Item::all();
        $consommateur = Consommateur::firstOrCreate([]);
        $commande=Commande::Where('consomateur_id' , $consommateur->id)->where('etat','en cours')->first();
      
        
        return view('consomateur.index')->with('users',$users)->with('categories',$categories)->with('items',$items)->with('user',$user)->with('commande',$commande);
    }


    public function addcmd(Request $request){

      //dd($request);
      $consommateur = Consommateur::firstOrCreate([]);
      //verifier si une commande est en cours  pour ce cnsommateur
      $commande=Commande::Where('consomateur_id' , $consommateur->id)->where('etat','en cours')->first();
      
      if($commande){

         //creation lignie de commande 

      $lc = new LigneCommande();
      $lc->quantity=$request->quantity;
      $lc->item_id=$request->iditem;
      //$lc->category_id=$request->idcategory;
      //$lc->user_id=$request->iduser;
      $lc->commande_id=$commande->id;
      
      $lc->save();
        
      }else{//commande n'existe pas 
         //creation d'une commande 
       // Créez un nouveau consommateur s'il n'existe pas déjà
      $consommateur = Consommateur::firstOrCreate([]);
      $commande = new Commande();
      $commande->consomateur_id=$consommateur->id;

      if($commande->save()){

        //creation lignie de commande 

      $lc = new LigneCommande();
      $lc->quantity=$request->quantity;
      $lc->item_id=$request->iditem;
      //$lc->category_id=$request->idcategory;
      //$lc->user_id=$request->iduser;
      $lc->commande_id=$commande->id;
      
      $lc->save();


      //redirection vers le pannier


      }else{redirect()->back()->with('error','imposible de commander le item');}}
      


      

    }

 
 
}
