<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class CategoryController extends Controller
{

     //affichage de a liste
     public function index()
     {
         $categories = Category::all();
         $items = Item::all(); // Or fetch items based on your logic
     
         return view('client.menu.index', compact('categories', 'items'));
     }


   


    // ajouter une catégorie a la liste 
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
           
        ]);

        $category=new Category();
        $category->name=$request->name;
        

        if ($category->save())
        {return redirect()->back()->with('success', 'Category successfully added');
        }else{
            echo"error";
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
