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


    

    //supprimer restaurant
    public function destroy($id) {

        $users =user::find($id);

        if($users->delete()){
            return redirect()->back();
        }else{echo"erreur"
        ;}    
        
        
    }



    // Deactivate restaurant
public function deactivate($id) {
    $users = user::find($id);

    if( $users) {
        $users->active = false;
        $users->save();
        
        return redirect()->back();
    } else {
        echo "Restaurant not found";
    }
}

}
