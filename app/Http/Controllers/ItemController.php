<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;
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



        $user = Auth::user();
    
        $item=new Item();
        $item->name=$request->name;
        $item->category_id=$request->category_id;
        $item->description=$request->description;
        $item->price=$request->price;
        $item->photo=$newname;
        $item->user_id = $user->id;
        

        

        if ($item->save())
        {return redirect()->back()->with('success', 'Item successfully added. ');;
        }else{
            echo"error";
        }


    }


    //supprimer produit
   //supprimer un produit
public function destroy($id) {
    // Find the item by its ID
    $item = Item::find($id);

    // Check if the item exists
    if (!$item) {
        return redirect()->back()->with('success', 'Item not found.');
    }

    // Get the file path of the item's photo
    $file_path = public_path('uploads/' . $item->photo);

    // Check if the file exists before attempting to delete it
    if (file_exists($file_path)) {
        unlink($file_path); // Delete the file
    }

    // Delete the item from the database
    if ($item->delete()) {
        return redirect()->back()->with('success', 'Item removed from the database successfully.');
    } else {
        return redirect()->back()->with('success', 'Failed to remove item from the database.');
    }
}




     //interface pour modfifier une subbscription
     public function updateinter($id) {
        $items =Item::find($id);
        return view('client.menu.update' )->with( 'items', $items);
    }



    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'photo' => 'required|image', // Ensure it's an image file
            'category_id' => 'required' 
        ]);
    
        $item = Item::find($id);
        if (!$item) {
            return redirect('/restaurant/menu')->with('success', 'Item not found');
        }
    
        // Handle file upload
        $newName = uniqid() . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move('uploads', $newName);
        $item->photo = $newName;
    
        // Update other fields
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->category_id = $request->category_id;
    
        if ($item->update()) {
            return redirect('/restaurant/menu')->with('success', 'Item successfully updated');
        } else {
            return redirect('/restaurant/menu')->with('error', 'Failed to update item');
        }
    }
    




    

}
