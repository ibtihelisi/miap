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

      
         // Créez un nouveau consommateur s'il n'existe pas déjà
      $consommateur = Consommateur::firstOrCreate([]);
      //verifier si une commande est en cours  pour ce cnsommateur
      $commande=Commande::Where('consomateur_id' , $consommateur->id)->where('etat','en cours')->first();
      
      if($commande){//si j'ai une cmd en cours


        $existe=false;
        foreach($commande->lignecommandes as $lignec){
          if($lignec->item_id == $request->iditem){
            $existe=true;
            if ($request->has('quantity') && $request->quantity !== null && $request->quantity !== '') {
              $lignec->quantity+= $request->quantity;}
              else{
                $lignec->quantity += 1;
              }

            if($lignec->update()){
              return redirect()->back()->with('success', 'item successfully added to cart. ');
            }
            else{
              echo "erreur";

            };
          }


        }

        if(!$existe){//if existe false cad le item n'esiste pas déja parmi les lignies des commande donc on l'ajoute 


         //creation lignie de commande 
         $lc = new LigneCommande();

         // Vérifie si la valeur de la quantité est null ou vide
         if ($request->has('quantity') && $request->quantity !== null && $request->quantity !== '') {
           $lc->quantity = $request->quantity;
           } else {
           // Si la quantité est null ou vide, affecte la valeur par défaut de 1
           $lc->quantity = 1;
         }
 
         $lc->item_id=$request->iditem;
         //$lc->category_id=$request->idcategory;
         //$lc->user_id=$request->iduser;
         $lc->commande_id=$commande->id;
       
         if($lc->save()){
           return redirect()->back()->with('success', 'item successfully added to cart. ');
         }
         else{
           echo "erreur";
         }


        }


        
      }else{//commande en cours n'existe pas 
          //creation d'une commande 
        
        $commande = new Commande();
        $commande->consomateur_id=$consommateur->id;

        if($commande->save()){

        //creation lignie de commande 

        $lc = new LigneCommande();
        if ($request->has('quantity') && $request->quantity !== null && $request->quantity !== '') {
          $lc->quantity = $request->quantity;
          } else {
          // Si la quantité est null ou vide, affecte la valeur par défaut de 1
          $lc->quantity = 1;
        }
        $lc->item_id=$request->iditem;
        //$lc->category_id=$request->idcategory;
        //$lc->user_id=$request->iduser;
        $lc->commande_id=$commande->id;
      
      
        if($lc->save()){
         return redirect()->back()->with('success', 'item successfully added to cart. ');
        }
        else{
          echo "erreur";
        }}}


      //redirection vers le pannier


        
      


      

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



public function showcheckout()  {
  return view('client.consomateur.checkout');
  
}







    
 
 
  }
