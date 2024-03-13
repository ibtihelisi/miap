<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
     //affichage de a liste
     public function index(){
        $products=Product::all();
        return view('admin.products.index')->with('products',$products);
    }


   

    // ajouter une catégorie a la liste 
    public function store(Request $request){
       /* $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'price',
            'photo'=>'photo'
        ]);
*/
        $newname =uniqid();//4fd7a
        $image=$request->file('photo');

        //si je veux récupére l'extension de l'image
        $newname .=".". $image->getClientOriginalExtension();//.jpeg

        //upload image
        $destinationPath='uploads';
        $image->move($destinationPath ,$newname);

        
         

       //si  je veux récupere le nom de l'image 
      // echo $image->getClientOriginalName();


      //taille
      //echo $image->getSize();




    
        $produit=new Product();
        $produit->name=$request->name;
        $produit->description=$request->description;
        $produit->price=$request->price;
        $produit->photo=$newname;
        

        

        if ($produit->save())
        {return redirect()->back();
        }else{
            echo"error";
        }


    }


    //supprimer produit
    public function destroy($id) {

        $produit =Product::find($id);

        $file_path = public_path().'/uploads/'.$produit->photo;

        //dd($filepath);

        unlink($file_path);

        if($produit->delete()){
            return redirect()->back();
        }else{echo"erreur"
        ;}
        
        
    }

/*
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


       
        
     }*/

}
