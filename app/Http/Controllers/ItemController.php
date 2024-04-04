<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
class ItemController extends Controller
{
    //


    public function index()
    {
        $categories = Category::all(); // Or fetch categories based on your logic
        $items = Item::all();
    
        return view('client.menu.index')->with('items',$items)->with('categories',$categories);
    }

   

    // ajouter une items la liste 
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




    
        $item=new Item();
        $item->name=$request->name;
        $item->category_id=$request->category_id;
        $item->description=$request->description;
        $item->price=$request->price;
        $item->photo=$newname;
        

        

        if ($item->save())
        {return redirect()->back();
        }else{
            echo"error";
        }


    }


    //supprimer produit
    public function destroy($id) {

        $item =Item::find($id);

        $file_path = public_path().'/uploads/'. $item->photo;

        //dd($filepath);

        unlink($file_path);

        if( $item->delete()){
            return redirect()->back();
        }else{echo"erreur"
        ;}
        
        
    }



     //interface pour modfifier une subbscription
     public function updateinter($id) {
        $item =Item::find($id);
        return view('client.menu.update' , ['item' => $item]);
    }



    

}
