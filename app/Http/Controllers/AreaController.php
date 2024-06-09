<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Middleware\User;
use App\Models\Area;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AreaController extends Controller
{
    


    
    //interface pour ajouter une area
    public function index() {

        $user = Auth::user();
        
        $all=Area::with('staff')->where('user_id', $user->id)->get();
        //dd($all->toArray());
        
       // $all=Staff::with('areas')->where('user_id', $user->id)->get();
        //dd($all->toArray());

        $areas = Area::where('user_id', $user->id)->get(); // Récupère toutes les zones de l'utilisateur connecté
        $staffs = Staff::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
    
        return view('client.area.index', compact('user', 'areas', 'staffs','all'));
    }
    



    //interface pour ajouter 
    public function create() {
        $user = Auth::user();

        $staffs = Staff::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
        $areas = Area::where('user_id', $user->id)->get(); // Récupère toutes les zones de l'utilisateur connecté
       
        
        return view('client.area.create')->with('user',$user)->with('staffs' ,$staffs)->with('areas',$areas);
    }

    
    
  // ajouter une items la liste 
  public function store(Request $request) {
    $request->validate([
        'name' => 'required|unique:areas',
        'staffs' => 'array', // Assurez-vous que staffs est un tableau
    ]);

    $user = Auth::user();

    // Créer la nouvelle zone
    $area = new Area();
    $area->name = $request->name;
    $area->user_id = $user->id;

    if ($area->save()) {
        // Associer les membres du personnel sélectionnés à la zone
        if ($request->has('staffs')) {
            $staffIds = $request->input('staffs');
            $area->staff()->attach($staffIds); // Utilisez attach pour associer les staffs à la zone
        }

        return redirect('/restaurant/area')->with('success', 'Area successfully added.');
    } else {
        return redirect()->back()->with('error', 'Failed to add area.');
    }
}





  //supprimer produit
  public function destroy($id) {

    $area =Area::find($id);


    if($area->delete()){
        return redirect()->back()->with('success', 'area successfully deleted. ');
    }else{echo"erreur"
    ;}
}



    
public function update(Request $request) {
    $request->validate([
         'name' => 'required|unique:areas,name,' . $request->idarea,
        
    ]);

    $id = $request->idarea;
    $area = Area::find($id);

    // Vérifier si le nom de la table a été modifié
  

    $area->name = $request->name;
   
    if($area->update()) {
        return redirect()->back()->with('success', 'Table successfully updated.');
    } else {
        return redirect()->back()->with('error', 'Error updating table.');
    }
}


    
    
}