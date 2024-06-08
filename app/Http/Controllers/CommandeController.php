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
        $userId = auth()->user()->id;
    
        // Récupérez également table_id du formulaire
        $tableId = $request->input('table_id');
    
        // Créez une nouvelle commande avec table_id
        $commande = Commande::create([
            'etat' => 'just created',
            'user_id' => $userId,
            'table_id' => $tableId, // Assurez-vous que votre modèle Commande accepte table_id comme remplissable
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
                'quantity' => $quantity, // Ajoutez la quantité
                // Assurez-vous que votre modèle OrderItem accepte item_id, commande_id et quantity comme remplissables
                // Ajoutez d'autres champs si nécessaire
            ]);
        }
    
        // Redirection vers la vue consomateur.checkout après ajout de la commande
        return redirect()->route('consomateur.checkout')->with('commande',$commande);
    }
    
    
   











}
