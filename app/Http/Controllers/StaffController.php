<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Area;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StaffController extends Controller
{
    //
    
    public function index(){

        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        $all=Staff::with('areas')->where('user_id', $user->id)->get();
        // Récupérer les catégories de l'utilisateur connecté
        $staffs = $user->staff;
        $areas = Area::where('user_id', $user->id)->get(); // Récupère toutes les zones de l'utilisateur connecté
        //$staffs = Staff::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
    
        //dd($all->toArray());
        return view('client.staff.index')->with('user',$user)->with('staffs',$staffs)->with('all',$all)->with('areas',$areas);
    }


    public function create() {
        $user = Auth::user();
        $staffs = Staff::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
       
        return view('client.staff.create')->with('staffs',$staffs)->with('user',$user);
    }


    public function store(Request $request){
        $request->validate([
            'staff_name'=>'required|unique:staff,name',
            'email'=>'required|email|unique:staff,email',
            'password' => 'required|min:8|confirmed',
        ], [
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);
    
        $user = Auth::user();
        $staff=new Staff();
        $staff->name=$request->staff_name;
        $staff->email=$request->email;
        $staff->password = Hash::make($request->password);
        $staff->user_id=$user->id;
    
        if ($staff->save()) {
            // Récupérer à nouveau les membres du personnel après l'ajout
            $staffs = $user->staff;
            return view('client.staff.index')->with('success', 'Staff successfully added')
                                              ->with('staffs', $staffs);
        } else {
            return redirect()->back()->with('error', 'Failed to add staff.');
        }  
    }
    


    
    public function destroy($id) {
        $staff = Staff::find($id);
        
        // j'ai également ajouté une vérification pour s'assurer que le membre du personnel existe avant de tenter de le supprimer. Si le membre du personnel n'est pas trouvé, un message d'erreur approprié sera renvoyé


        if (!$staff) {
            return redirect()->back()->with('error', 'Staff not found.');
        }
    
        if ($staff->delete()) {
            // Récupérer à nouveau les membres du personnel après la suppression
            $user = Auth::user();
            $staffs = $user->staff;
    
            return view('client.staff.index')->with('success', 'Staff successfully removed from database. ')
                                             ->with('staffs', $staffs);
        } else {
            return redirect()->back()->with('error', 'Failed to remove staff from database.');
        } 
    }
    


}
