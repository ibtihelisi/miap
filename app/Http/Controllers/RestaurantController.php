<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response as FacadeResponse;


class RestaurantController extends Controller
{
    
     //affichage de a liste
     public function index(){
        $users=User::all();
        return view('admin.restaurants.index')->with('users',$users);

        
    }


     //interface pour ajouter uun compte restaurant
     public function create() {
        return view('admin.restaurants.create');
    }



    // ajouter un restau a la liste 
    public function store(Request $request){
        $request->validate([
            'restaurant_name'=>'required|unique:users,restaurant_name',
       
            'owner_name'=>'required',
            'email'=>'required|unique:users,email',
            'owner_phone'=>'required',
            'password' => 'required|min:8|confirmed',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust max file size as needed
            
            
           
            
        ], [
            'restaurant_name.unique' => 'The restaurant name is already taken.',
            'email.unique' => 'The restaurant email is already taken.',
       
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]);


            $newname =uniqid();//4fd7a
             $image=$request->file('logo');
     
             //si je veux récupére l'extension de l'image
             $newname .=".". $image->getClientOriginalExtension();//.jpeg
     
             //upload image
             $destinationPath='uploads';
             $image->move($destinationPath ,$newname);
     
             
              

        $user=new User();
        $user->restaurant_name=$request->restaurant_name;
        $user->logo=$newname;
        $user->location=$request->location;
        $user->location2=$request->location2;
        $user->governorate=$request->governorate;
        $user->city=$request->city;
        $user->patnumber=$request->patnumber;
        $user->postal_code=$request->postal_code;
        $user->desc=$request->desc;
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



    public function afficherMsgBloquer()
    
    {
        return view('client.bloquer');
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
            fputcsv($file, ['id','Restaurant Name','Logo','Location','Description', 'Owner Name', 'Owner Email', 'CreationDtae']);
    
            // Write CSV rows
            foreach ($users as $user) {
                fputcsv($file, [$user->id, $user->restaurant_name,$user->logo,$user->location,$user->desc, $user->owner_name, $user->email, $user->created_at]);
            }
    
            fclose($file);
        };
    
        // Return CSV file as response
        return FacadeResponse::stream($callback, 200, $headers);
    }





       
        //interface pour modfifier une subbscription
        public function updateinter($id) {
                // Récupérer les informations du restaurant à partir de son ID
            $users=User::findOrFail($id);
            return view('admin.restaurants.update')->with('users', $users);
        }



    
             
        public function update(Request $request, $id)
        {
            try {
                $validated = $request->validate([
                    'restaurant_name' => 'required|unique:users,restaurant_name,' . $id,
                    'desc' => 'required',
                    'location' => 'required',
                    'governorate' => 'required',
                    'city' => 'required',
                    'patnumber' => 'required',
                    'postal_code' => 'required',
                    'owner_phone' => 'required',
                    'logo' => 'nullable|mimes:jpeg,jpg,png,svg',
                ], [
                    'restaurant_name.unique' => 'The restaurant name already exists.',
                ]);
        
            } catch (\Illuminate\Validation\ValidationException $e) {
                return redirect()->back()->withErrors($e->errors())->withInput();
            }
        
            $user = User::find($id);
        
            if (!$user) {
                return redirect()->back()->with('error', 'User not found');
            }
        
            if ($request->hasFile('logo')) {
                $request->validate([
                    'logo' => ['mimes:jpeg,jpg,png,svg'],
                ]);
        
                if ($user->logo) {
                    if (file_exists(public_path('uploads/' . $user->logo))) {
                        unlink(public_path('uploads/' . $user->logo));
                    }
                }
        
                $file_name = 'logo_' . time() . '.' . $request->logo->extension();
                $request->logo->move(public_path('uploads'), $file_name);
                $user->logo = $file_name;
            }
        
            $user->restaurant_name = $request->restaurant_name;
            $user->desc = $request->desc;
            $user->location = $request->location;
            $user->location2 = $request->location2;
            $user->governorate = $request->governorate;
            $user->city = $request->city;
            $user->postal_code = $request->postal_code;
            $user->patnumber = $request->patnumber;
            $user->owner_phone = $request->owner_phone;
        
            if ($user->save()) {
                // Rediriger vers la liste des restaurants avec un message de succès
                return redirect()->route('admin.restaurants.index')->with('success', 'Restaurant updated successfully');
            } else {
                return redirect()->back()->with('error', 'Failed to update restaurant');
            }
        }
        
  
        
        


        public function updatemanagement(Request $request, $id)
        {
            try {
                $validated = $request->validate([
                    'restaurant_name' => 'required|unique:users,restaurant_name,' . $id,
                    'desc' => 'required',
                    'location' => 'required',
                    'governorate' => 'required',
                    'city' => 'required',
                    'patnumber' => 'required',
                    'postal_code' => 'required',
                    'owner_phone' => 'required',
                    'logo' => 'nullable|mimes:jpeg,jpg,png,svg',
                ], [
                    'restaurant_name.unique' => 'The restaurant name already exists.',
                ]);
        
            } catch (\Illuminate\Validation\ValidationException $e) {
                // Si la validation échoue, redirigez avec les erreurs
                return redirect()->back()->withErrors($e->errors())->withInput();
            }
        
            // Récupération de l'utilisateur par ID
            $user = User::findOrFail($id);
        
            // Vérification du fichier logo
            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('uploads', 'public');
                $user->logo = $logoPath;
            }
        
            // Sauvegarde des données de l'utilisateur
            $user->restaurant_name = $request->restaurant_name;
            $user->desc = $request->desc;
            $user->location = $request->location;
            $user->location2 = $request->location2;
            $user->governorate = $request->governorate;
            $user->city = $request->city;
            $user->postal_code = $request->postal_code;
            $user->patnumber = $request->patnumber;
            $user->owner_phone = $request->owner_phone;
        
            // Sauvegarde de l'utilisateur
            if ($user->save()) {
                // Redirection avec un message de succès
                return redirect()->route('client.restaurants.index')->with('success', 'Restaurant updated successfully');
            } else {
                // Redirection avec un message d'erreur
                return redirect()->back()->with('error', 'Failed to update restaurant');
            }
        }
        

        
    



 public function sub(){
    $user=Auth::user();
    return view('client.subscription.index')->with('user',$user);
}





}
