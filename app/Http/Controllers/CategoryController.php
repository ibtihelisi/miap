<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

     //affichage de a liste



     public function index()
     {
            // Récupérer l'utilisateur connecté
            $user = Auth::user();

            // Récupérer les catégories de l'utilisateur connecté
            $categories = $user->categories;
            
            // Récupérer les articles en fonction des catégories de l'utilisateur connecté (si nécessaire)
            $items = $user->items;
     
         return view('client.menu.index', compact('categories', 'items'));
     }


   


    // ajouter une catégorie a la liste s
    public function store(Request $request){


          // Définir les règles de validation et les messages personnalisés
    $messages = [
        'name.required' => 'Le nom de la catégorie est obligatoire.',
        'name.unique' => 'This category already exists',
    ];
        $request->validate([
            'name'=>'required|unique:categories,name',
           
        ], $messages);


        $user = Auth::user();

        $category=new Category();
        $category->name=$request->name;
        $category->user_id = $user->id; 
        

        if ($category->save())
        {return redirect()->back()->with('success', 'Category successfully added');
        }else{
            return redirect()->back()->with('error', 'Error adding category');
  
        }


    }


    //supprimer categorie
    public function destroy($id) {

        $categorie =Category::find($id);

        if($categorie->delete()){
            return redirect()->back()->with('success', 'Category successfully removed from database. ');
        }else{echo"erreur"
        ;}    
        
        
    }


    //modif categorie
     public function update(Request $request )  {

        $request->validate([
            'name'=>'required',
           
        ]);
         
        $id = $request->idcategory;

        $categorie =Category::find($id);

        $categorie->name=$request->name;
       

        if($categorie->update()){
            return redirect()->back()->with('success', 'Category successfully updated. ');
        }
        else{
            echo "erreur";
        }


       
        
     }

     

}
