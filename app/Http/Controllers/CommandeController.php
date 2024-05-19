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



class CommandeController extends Controller
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
}
