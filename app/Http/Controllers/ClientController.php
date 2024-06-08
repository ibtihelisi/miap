<?php

namespace App\Http\Controllers;

use App\Events\CallWaiter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Expense;
use Illuminate\Support\Facades\DB;

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



        // Calculer le total des dépenses de l'utilisateur connecté
        $totalExpenses = Expense::where('user_id', $user->id)->sum('price');

        // Récupérer les dépenses mensuelles de l'utilisateur connecté
        $monthlyExpenses = Expense::select(
                DB::raw('MONTH(date) as month'),
                DB::raw('SUM(price) as total')
            )
            ->where('user_id', $user->id)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Préparer les données pour le graphique
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $expensesData = array_fill(0, 12, 0);

        foreach ($monthlyExpenses as $expense) {
            $expensesData[$expense->month - 1] = $expense->total;
        }










         // Récupérer les dépenses par catégorie
         $expensesByCategory = Expense::select(
            'expense_categories.name as category',
            DB::raw('SUM(expenses.price) as total')
        )
        ->join('expense_categories', 'expenses.expensecategory_id', '=', 'expense_categories.id')
        ->where('expenses.user_id', $user->id)
        ->groupBy('expense_categories.name')
        ->get();

    $categories = $expensesByCategory->pluck('category');
    $categoryExpenses = $expensesByCategory->pluck('total');

        
    return view('client.dashboard', compact('categoryCount','itemCount','staffCount','tableCount','areaCount','totalExpenses','orderCount','user' ,'months', 'expensesData' ,'categories', 'categoryExpenses'));
}



}
