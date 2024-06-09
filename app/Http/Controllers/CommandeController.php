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
use App\Models\OrderItem;
use App\Models\Staff;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;



class CommandeController extends Controller
{
    //

  


        
    //interface pour ajouter une area
    public function index() {

        $user = Auth::user();
        
        $all=Commande::with('items')->where('user_id', $user->id)->get();
        //dd($all->toArray());
        
       // $all=Staff::with('areas')->where('user_id', $user->id)->get();
        //dd($all->toArray());

        $items = Item::where('user_id', $user->id)->get(); // Récupère toutes les zones de l'utilisateur connecté
        $commandes = Commande::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
    
        return view('client.order.index', compact('user', 'items', 'commandes','all'));
    }



    public function addOrder(Request $request)
{
    $request->validate([
        'table_id' => 'required',
        '$items' => 'array', 
    ]);

    // Récupérez les données soumises depuis le formulaire
    $selectedItems = $request->input('selected_items', []);
    $tableId = $request->input('table_id');

    // Récupérez l'ID de l'utilisateur à partir de l'URL
    $userId = $request->user()->id;

    // Créez une nouvelle commande associée à cet utilisateur
    $commande = Commande::create([
        'etat' => 'just created',
        'user_id' => $userId, // Utilisez l'ID de l'utilisateur récupéré
        'table_id' => $tableId,
        // Ajoutez d'autres champs si nécessaire
    ]);

    // Associez chaque élément sélectionné avec la commande
    foreach ($selectedItems as $itemId) {
        // Récupérez la quantité de chaque élément à partir du formulaire
        $quantity = $request->input("quantity.$itemId", 1); // Valeur par défaut 1 si non spécifiée

        // Créez un nouvel élément de commande
        OrderItem::create([
            'item_id' => $itemId,
            'commande_id' => $commande->id,
            'quantity' => $quantity,
            // Ajoutez d'autres champs si nécessaire
        ]);
    }

    // Redirection vers une autre page après ajout de la commande
    return redirect()->route('consomateur.checkout')->with('commande', $commande);
}





   //affichage de a liste
   public function showcheckout(){

    $users=User::all();
    //$user = User::find($id);
    $categories=Category::all();
    $items=Item::all();
    $tables=Table::all();
    $table = Table::firstOrCreate([]);
    $areas = Area::all();
    $commande=Commande::Where('table_id' , $table->id)->where('etat','en cours')->first();

    return view('consomateur.checkout')->with('users',$users)
                                    ->with('categories',$categories)
                                    ->with('items',$items)
                                    
                                    ->with('commande',$commande)
                                    ->with('tables' ,$tables)
                                    
                                    ->with('areas' ,$areas);
}





public function updateEtat(Request $request)
{
    // Validez les données soumises depuis le formulaire
    $request->validate([
        'commande_id' => 'required|exists:commandes,id',
        'new_state' => 'required|in:In preparation,Delivered',
    ]);

    $commandeId = $request->input('commande_id');
    $newState = $request->input('new_state');

    // Récupérez la commande à mettre à jour
    $commande = Commande::findOrFail($commandeId);

    // Mettez à jour l'état de la commande en fonction du nouvel état
    $commande->etat = $newState;
    $commande->save();

    // Redirection vers la page précédente avec un message de succès
    return redirect()->back()->with('success', 'État de la commande mis à jour avec succès.');
}



}