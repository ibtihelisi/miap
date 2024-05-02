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


    
    public function destroy($id) {
        // Find the item by its ID
        $items = Item::find($id);

        // Delete the item from the database
        if ($items->delete()) {
             return redirect()-> route('restaurant.menu') ->with('success', 'Item removed from the database successfully.');
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
          
        ]);
    
        $item = Item::find($id);
        // Vérifier si une nouvelle image a été téléchargée
        if($request->hasFile('photo')){
            $request->validate([
                'name' => 'required',
                'description' => 'required', // Ajoutez cette ligne pour valider le champ description
                'price' => 'required',
                //'category_id' => 'required',
                'photo' => 'nullable|mimes:jpeg,jpg,png,svg', // Assurez-vous que le champ photo est nullable
            ]);
           // Supprimer l'ancienne image si elle existe
        if ($item->photo != '') {
            $imagePath = public_path('uploads/'.$item->photo);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
            $file_name='photoitem_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads'),$file_name);
            $item->photo=$file_name;
        }
    
        // Update other fields
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        // Update availability status
        $item->available = $request->has('available') ? 'available' : 'not available';

    
        if ($item->update()) {
            return redirect('/restaurant/menu')->with('success', 'Item successfully updated');
        } else {
            return redirect('/restaurant/menu')->with('success', 'Failed to update item');
        }
    }
    




    

}
