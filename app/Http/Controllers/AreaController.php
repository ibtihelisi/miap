<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\User;
use App\Models\Area;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{
    


    
    //interface pour ajouter une area
    public function index() {

        $user = Auth::user();

        $areas = Area::where('user_id', $user->id)->get(); // Récupère toutes les zones de l'utilisateur connecté
   
        $staffs = Staff::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
       
      
        return view('client.area.index')->with('user',$user)->with('areas' ,$areas)->with('staffs', $staffs);
    }



    //interface pour ajouter 
    public function create() {
        $user = Auth::user();

        $staffs = Staff::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
        
        
        return view('client.area.create')->with('user',$user)->with('staffs' ,$staffs);
    }

    
    
  // ajouter une items la liste 
  public function store(Request $request){
    /* $request->validate([
         'name'=>'required',
         
     ]);
     */




     $user = Auth::user();
    
     $area=new Area();
     $area->name=$request->name;
     $area->user_id = $user->id;
     $area->staff_id=$request->staff;
    
    
     

     

     if ($area->save())
     {return view('client.area.index')->with('success', 'area successfully added. ');
     }else{
         echo"error";
     }


 }




  //supprimer produit
  public function destroy($id) {

    $area =Area::find($id);


    if($area->delete()){
        return redirect()->back()->with('success', 'area successfully deleted. ');
    }else{echo"erreur"
    ;}}



    public function updateinter($id) {
        $user = Auth::user();

        $staffs = Staff::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
        
        
        return view('client.area.update')->with('user',$user)->with('staffs' ,$staffs);
    }

    
    
}
