<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response as FacadeResponse;


class RestaurantController extends Controller
{
    
     //affichage de a liste
     public function index(){
        $users=User::all();
        return view('admin.restaurants.index')->with('users',$users);
    }


     //interface pour ajouter une subbscription
     public function create() {
        return view('admin.restaurants.create');
    }



    // ajouter un restau a la liste 
    public function store(Request $request){
        $request->validate([
            'restaurant_name'=>'required',
            'owner_name'=>'required',
            'email'=>'required',
            'owner_phone'=>'required',
            'password' => 'required|min:8|confirmed',
           
            
        ], [
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);

        $user=new User();
        $user->restaurant_name=$request->restaurant_name;
        $user->owner_name=$request->owner_name;
        $user->email=$request->email;
        $user->owner_phone=$request->owner_phone;
        $user->password = Hash::make($request->password);
     
       

        if ($user->save()) {
            return redirect('/admin/restaurants')->with('success', 'Restaurant  successfully added');
        } else{ return redirect()->back();
        }  



        return redirect()->back()->withErrors($request->all())->withInput();

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
   

    
    public function export()
    {
        // Fetch restaurants data
        $users=User::all();
    
        // Define CSV headers
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=restaurants.csv',
        ];
    
        // Create CSV file content
        $callback = function () use ($users) {
            $file = fopen('php://output', 'w');
    
            // Write CSV headers
            fputcsv($file, ['id','Restaurant Name', 'Owner Name', 'Owner Email', 'CreationDtae']);
    
            // Write CSV rows
            foreach ($users as $user) {
                fputcsv($file, [$user->id, $user->restaurant_name, $user->owner_name, $user->email, $user->created_at]);
            }
    
            fclose($file);
        };
    
        // Return CSV file as response
        return FacadeResponse::stream($callback, 200, $headers);
    }





       
        //interface pour modfifier une subbscription
        public function updateinter($id) {
        
            $users=User::all();
            return view('admin.restaurants.update')->with('users', $users);
        }



    
                public function edit($id) {
                    // Récupérer les informations du restaurant à partir de l'ID de l'utilisateur
                    $restaurant = User::findOrFail($id);

                    // Passer les informations du restaurant à la vue update.blade.php
                    return view('update')->with('restaurant', $restaurant);
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
