<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\Area;
use App\Models\Commande;
use App\Models\Item;
use App\Models\User;
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
        $items = Item::where('user_id', $user->id)->get(); // Récupère toutes les zones de l'utilisateur connecté
        $commandes = Commande::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
    
        //dd($all->toArray());
        return view('client.staff.index')->with('user',$user)->with('staffs',$staffs)->with('all',$all)->with('areas',$areas)->with('items',$items)->with('commandes',$commandes);
    }


    public function create() {
        $user = Auth::user();
        $staffs = Staff::where('user_id', $user->id)->get(); // Récupère tous les membres du personnel de l'utilisateur connecté
       
        return view('client.staff.create')->with('staffs',$staffs)->with('user',$user);
    }


    public function store(Request $request) {
        $request->validate([
            'staff_name' => 'required|unique:staff,name',
            'email' => 'required|email|unique:staff,email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ], [
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);
    
        $user = Auth::user();
        $staff = new Staff();
        $staff->name = $request->staff_name;
        $staff->email = $request->email;
        $staff->password = Hash::make($request->password);
        $staff->user_id = $user->id;
    
        $staff_saved = $staff->save();
    
        if ($staff_saved) {
            // Save to users table as well
            $user_staff = new User();
            $user_staff->restaurant_name = '$request->email';
            $user_staff->desc = '00';
            $user_staff->logo = '00';
            $user_staff->location = '00';
            $user_staff->location2 = '00';
            $user_staff->plan = '00';
            $user_staff->postal_code = '00';
            $user_staff->patnumber= '00';
            $user_staff->city = '00';
            $user_staff->governorate = '00';
            $user_staff->owner_phone = '$request->email';
            $user_staff->owner_name = $request->staff_name;
            $user_staff->email = $request->email;
            $user_staff->password = Hash::make($request->password);
            $user_staff->role = 'staff'; // Set role to staff


            $user_saved = $user_staff->save();
    
            if ($user_saved) {
                // Retrieve staff members again after adding
                $staffs = $user->staff;
                return view('client.staff.index')
                    ->with('success', 'Staff successfully added')
                    ->with('staffs', $staffs);
            } else {
                // Rollback staff entry if user entry fails
                $staff->delete();
                return redirect()->back()->with('error', 'Failed to add staff to users table.');
            }
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
    



         //affichage client dashboard
         public function dashboard()
         {
             // Récupérer l'utilisateur connecté
             $user = auth()->user();
             // Récupérer le nom de l'utilisateur connecté
             $username = $user->name;
     
             // Récupérer le personnel correspondant au nom de l'utilisateur connecté
             $staff = Staff::where('name', $username)->first();
     
             // Vérifier si le personnel existe et récupérer les zones associées
             if ($staff) {
                 $areas = $staff->areas;
             } else {
                 $areas = collect(); // Collection vide si aucun personnel trouvé
             }
     
             // Passer les données à la vue
             return view('staff.dashboard', compact('areas', 'user'));
         }
}
