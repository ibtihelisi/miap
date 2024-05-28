<?php

namespace App\Http\Controllers;

use App\Events\CallWaiterEvent;
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
use Illuminate\Support\Facades\Session;


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
          
            
            $cart = Session::get('cart', []);

            return view('consomateur.index')->with('users',$users)
                                            ->with('categories',$categories)
                                            ->with('items',$items)
                                            ->with('user',$user)
                                            ->with('commande',$commande)
                                            ->with('tables' ,$tables)
                                            ->with('cart',$cart)
                                            ->with('areas' ,$areas);
      }






      


public function addcmd(Request $request){

                              
          // Créez un nouveau consommateur s'il n'existe pas déjà
        // $table = Table::firstOrCreate([]);
        //verifier si une commande est en cours  pour ce cnsommateur
        //$commande=Commande::Where('table_id' , $table->id)->where('etat','en cours')->first();


        // Récupérer l'ID de la table sélectionnée à partir des données du formulaire
        $table = $request->table_id;
        // Vérifier si une commande est en cours pour cette table
        $commande = Commande::where('etat', 'en cours')->first();
          //dd($commande);
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
          $lc->user_id=$request->iduser;
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

          $request->validate([
            'table_id' => 'required|exists:tables,id',
            'paymentMethod' => 'required|in:cash,tpe', // Assuming these are the only valid options
            // other validations...
        ]);

        $commande = new Commande();

        $commande->etat='en cours';
        $commande->table_id = $request->input('table_id');
        $commande->pay = $request->input('paymentMethod');
        $commande->user_id=2;
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



      public function addToCart(Request $request)
{
    // Récupérer le produit à partir de l'ID fourni dans la requête
    $item = Item::find($request->iditem);
    
    // Vérifier si l'élément existe
    if (!$item) {
        return redirect()->back()->with('error', 'Item not found!');
    }

    // Récupérer le panier de la session
    $cart = Session::get('cart', []);

    // Générer un ID unique pour cet article dans le panier
    $cartItemId = uniqid();

    // Construire l'élément à ajouter au panier
    $cartItem = [
        "name" => $item->name,
        "quantity" => $request->quantity,
        "price" => $item->price,
        // Vous pouvez ajouter d'autres détails ici si nécessaire
    ];

    // Ajouter l'élément au panier avec l'ID généré
    $cart[$cartItemId] = $cartItem;

    // Mettre à jour le panier dans la session
    Session::put('cart', $cart);

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'Item added to cart!');
}

    


public function placeOrder(Request $request)
{
    // Récupérer le panier de la session
    $cart = Session::get('cart', []);

    // Vérifier si le panier est vide
    if (empty($cart)) {
        return redirect()->back()->with('error', 'Your cart is empty!');
    }

    // Créer une nouvelle commande
    $commande = new Commande();
    
    // Calculer le prix total en additionnant les prix des articles dans le panier
    $commande->total_price = array_sum(array_column($cart, 'price'));

    // Sauvegarder la commande
    $commande->save();

    // Parcourir chaque article dans le panier et créer un nouvel élément de commande pour chacun
    foreach ($cart as $productId => $item) {
      $ligneCommande = new LigneCommande();
      $ligneCommande->order_id = $commande->id;
      $ligneCommande->product_id = $productId;
      $ligneCommande->quantity = $item['quantity'];
      $ligneCommande->price = $item['price'];
      $ligneCommande->save();
    }

    // Vider le panier de la session après avoir passé la commande
    Session::forget('cart');

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'Order placed successfully!');
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



public function callWaiter(Request $request)
{
    $tableId = $request->input('table_id');
    $userId = $request->input('iduser');

    // Logique pour appeler le serveur...

    event(new CallWaiterEvent($tableId, $userId));

    return response()->json(['message' => 'Waiter has been called!']);
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
