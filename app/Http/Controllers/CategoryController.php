<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

     //affichage de a liste
    public function index(){
        $categories=Category::all();
        return view('admin.categories.index')->with('categories',$categories);
    }


   


    // ajouter une catégorie a la liste 
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);

        $category=new Category();
        $category->name=$request->name;
        $category->description=$request->description;

        if ($category->save())
        {return redirect()->back();
        }else{
            echo"error";
        }


    }


    //supprimer categorie
    public function destroy($id) {

        $categorie =Category::find($id);

        if($categorie->delete()){
            return redirect()->back();
        }else{echo"erreur"
        ;}    
        
        
    }


    //modif categorie
     public function update(Request $request )  {

        $request->validate([
            'name'=>'required',
            'description'=> 'required'

        ]);
         
        $id = $request->idcategory;

        $categorie =Category::find($id);

        $categorie->name=$request->name;
        $categorie->description=$request->description;

        if($categorie->update()){
            return redirect()->back();
        }
        else{
            echo "erreur";
        }


       
        
     }

}
