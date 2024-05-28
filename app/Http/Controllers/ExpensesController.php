<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Expense;
use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ExpensesController extends Controller
{
    //

     
    public function index(){

        // Récupérer l'utilisateur connecté
            $user = Auth::user();

        // Récupérer les expenses catégories de l'utilisateur connecté
        $expenesescategory = $user->expensescartegories;
        
        // Récupérer toutes les dépenses de la base de données
        $expenses = Expense::all();
    
       
        
        

        //// Accédez aux épenses de chaque expenses catégorie de ce user connecté
       // $expeneses = $expenesescategory-> expenses;
       
        return view('client.expenses.index',compact('user','expenesescategory','expenses'));
    }




    
        // ajouter une expense category a la liste 
        public function store(Request $request){

            $user = Auth::user();
            
            $request->validate([
               'expencecategoryname'=>['required']
            ]);
            $expenesescategory=new ExpenseCategory();
            $expenesescategory->name=$request->expencecategoryname;
            $expenesescategory->user_id=$user->id;
           
            
    
            
    
            if ($expenesescategory->save())
            {return redirect()->back()->with('success','Expense Category added successfully');
            }else{
                echo"error";
            }
    
    
       }



       public function destroy($id) {

                $expenesescategory= ExpenseCategory::find($id);

                    if($expenesescategory->delete()){
                        return redirect()->back()->with('success', 'Expense Category successfully removed  ');
                    }else{echo"erreur"
                    ;}
                    
            
    }





      
      public function update(Request $request ,$id )  {

        $request->validate([
            'expencecategoryname'=>['required']

        ]);


        $user = Auth::user();

        $expenesescategory =ExpenseCategory::find($id);

        $expenesescategory->name=$request->expencecategoryname;
         $expenesescategory->user_id=$user->id;

        if($expenesescategory->update()){
            return redirect()->back()->with('success', 'Expense Category successfully updated ');
        }
        else{
            echo "erreur";
        }


       
        
     }









     
    
        // ajouter une expense category a la liste 
        public function store_expense(Request $request){

            $user = Auth::user();
            $expenesescategory = $user->expensescartegories;
            $request->validate([
               'expensename'=>'required',
               'expensecategory_id' => 'required', // Assure-toi que l'ID de la catégorie est présent dans la requête
               'price' => 'required|numeric', // Validate that the price is a numeric value
               'date' => 'required|date_format:Y-m-d', // Validate date format as YYYY-MM-DD

            ]);
            $expenese=new Expense();
            $expenese->name=$request->expensename;
            $expenese->date = date('Y-m-d', strtotime($request->date)); // Convert date to YYYY-MM-DD format

            $expenese->price=$request->price;

            $expenese->expensecategory_id = $request->expensecategory_id; // Associe l'ID de la catégorie de dépenses

            $expenese->user_id=$user->id;
            
    
            
    
            if ($expenese->save())
            {return redirect()->back();
            }else{
                echo"error";
            }
    
    
       }



       public function destroy_expense($id) {

        $expeneses= Expense::find($id);

        if($expeneses->delete()){
            return redirect()->back();
        }else{echo"erreur"
        ;}
        
        
     }


     public function update_expense(Request $request, $id)
     {
         $user = Auth::user();
         $expense = Expense::findOrFail($id);
     
         $request->validate([
             'expensename' => 'required',
             'expensecategory_id' => 'required', // Assure-toi que l'ID de la catégorie est présent dans la requête
             'price' => 'required|numeric', // Validate that the price is a numeric value
             'date' => 'required|date_format:Y-m-d', // Validate date format as YYYY-MM-DD
         ]);
     
         // Mettre à jour les attributs de la dépense
         $expense->name = $request->expensename;
         $expense->date = date('Y-m-d', strtotime($request->date));
         $expense->price = $request->price;
         $expense->expensecategory_id = $request->expensecategory_id;
         $expense->user_id=$user->id;
     
         // Sauvegarder les modifications
         if ($expense->save()) {
             return redirect()->back()->with('success', 'Expense updated successfully');
         } else {
             return redirect()->back()->with('error', 'Failed to update expense');
         }
     }
     








}
