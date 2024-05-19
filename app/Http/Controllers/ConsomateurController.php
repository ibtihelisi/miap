<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Item;
use App\Models\Commande;
use App\Models\LigneCommande;
use App\Models\Consommateur;
use App\Models\Table;
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
        $tables=Table::all();
        $table = Table::firstOrCreate([]);

        
        $areas = Area::all();
        $commande=Commande::Where('table_id' , $table->id)->where('etat','en cours')->first();
      
        
        return view('consomateur.index')->with('users',$users)
                                        ->with('categories',$categories)
                                        ->with('items',$items)
                                        ->with('user',$user)
                                        ->with('commande',$commande)
                                        ->with('tables' ,$tables)
                                        ->with('areas' ,$areas);
    }

    
    public function addcmd(Request $request){

      {
        $request->validate([
            'quantity' => 'required|integer|min=1',
            'idcategory' => 'required|exists:categories,id',
            'iditem' => 'required|exists:items,id',
            'iduser' => 'required|exists:users,id',
        ]);

        // Get the user
        $user = Auth::user();

        // Find or create a new 'commande' for the user and table, assuming table_id is available
        $tableId = 1; // Replace with your logic to get the correct table ID
        $commande = Commande::firstOrCreate(
            ['table_id' => $tableId, 'etat' => 'en cours'],
            ['user_id' => $user->id]
        );

        // Create a new LigneCommande
        $ligneCommande = new LigneCommande();
        $ligneCommande->quantity = $request->input('quantity');
        $ligneCommande->item_id = $request->input('iditem');
        $ligneCommande->commande_id = $commande->id;
        $ligneCommande->user_id = $request->input('iduser');
        $ligneCommande->save();

        return redirect()->back()->with('success', 'Item added to order successfully.');
    }
        
      
              


        
      


      

    }


    
    public function ligneCommandeDestroy($idlc){
      $lc=LigneCommande::find($idlc);

      $lc->delete();
      return redirect()->back()->with('success', 'item successfully deleted from cart. ');
      
      
    }

 
 public function ligneCommandePlusQuantity($idlc){
   $lc = LigneCommande::find($idlc);

   // Vérifie si la ligne de commande existe
   if($lc){
       // Ajoute 1 à la quantité
       $lc->quantity += 1;
       // Enregistre les modifications
       $lc->save();
       return redirect()->back()->with('success', 'Quantity updated successfully.');
   } else {
       // Si la ligne de commande n'existe pas, retourne un message d'erreur
       return redirect()->back()->with('error', 'Line not found.');
   }
}



public function ligneCommandeMoinsQuantity($idlc){
 $lc = LigneCommande::find($idlc);

 // Vérifie si la ligne de commande existe
 if($lc){
     // Diminue de 1 la quantité
     $lc->quantity -= 1;

     // Vérifie si la quantité est inférieure ou égale à zéro
     if ($lc->quantity <= 0) {
         // Si la quantité est inférieure ou égale à zéro, supprime la ligne de commande
         $lc->delete();
         return redirect()->back()->with('success', 'Item removed from cart.');
     } else {
         // Sinon, enregistre les modifications
         $lc->save();
         return redirect()->back()->with('success', 'Quantity updated successfully.');
     }
 } else {
     // Si la ligne de commande n'existe pas, retourne un message d'erreur
     return redirect()->back()->with('error', 'Line not found.');
 }
}





public function showcheckout($id){
  $users=User::all();
  $user = User::find($id);
  $categories=Category::all();
  $items=Item::all();
  $table = Table::firstOrCreate([]);
  $commande=Commande::Where('table_id' , $table->id)->where('etat','en cours')->first();

  
  return view('consomateur.checkout')->with('users',$users)->with('categories',$categories)->with('items',$items)->with('user',$user)->with('commande',$commande);
}




    
 
 
  }
