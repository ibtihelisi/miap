<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Expense;

class ClientController extends Controller
{
    


     //affichage client dashboard
  public function dashboard()
{
    // Récupérer l'utilisateur connecté
    $user = auth()->user();

    // Compter le nombre de catégories
    $categoryCount = $user->categories->count();

    // Compter le nombre d'articles
    $itemCount = $user->items->count();

    // Compter le nombre de zones
    $areaCount = $user->areas->count();

    // Compter le nombre de tables
    $tableCount = $user->tables->count();


    // Compter le nombre de order
    $orderCount = $user->commande->count();
    
    // Compter le nombre de personnel
    $staffCount = $user->staff->count();


     // Calculer le total des dépenses de l'utilisateur connecté
     $totalExpenses = Expense::where('user_id', $user->id)->sum('price');


    return view('client.dashboard', compact('categoryCount','itemCount','staffCount','tableCount','areaCount','totalExpenses','orderCount'));
}

}
