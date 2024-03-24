<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;


class RestaurantController extends Controller
{
    
     //affichage de a liste
     public function index(){
        $users=User::all();
        return view('admin.restaurants.index')->with('users',$users);
    }


    //search function 
    public function search(Request $request){
        $search=$request->input('search');
        $users = User::where('restaurant_name', 'like', "%$search%")
                      ->orWhere('owner_name', 'like', "%$search%")
                        ->get();

        return view('admin.restaurants.index')->with('users', $users);
        

    }


    

    //supprimer restaurant
    public function destroy($id) {

        $users =User::find($id);

        if($users->delete()){
            return redirect()->back()->with('success', 'Restaurant successfully removed from database. ');
  
        }else{ return redirect()->back();
        }    
        
        
    }



    // Deactivate restaurant
    public function deactivate($id) {
        // je veux Trouver l'utilisateur dans la base de données
        $users = User::find($id);
         //puis  Mettre à jour le statut de l'utilisateur et sauvegarder dans la base de données
        $users->active = "not active";
        $users->save();
        // Rediriger avec un message de succès
        return redirect()->back()->with('success', '"'. $users->restaurant_name.' "Restaurant successfully deactivated. ');
    }
    

   
    




    // Activate restaurant
    public function activate($id) {

        $users = user::find($id);
        $users->active ="active";
        $users->save();
       
        return redirect()->back()->with('success', '"'. $users->restaurant_name.' "restaurant was successfully activated. ');
       
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
