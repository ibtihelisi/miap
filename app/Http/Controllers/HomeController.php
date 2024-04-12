<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users=User::all();
       if (Auth::user()->role=="admin"){
        return redirect('/admin/dashboard')->with('users', $users);
       }else{
        return redirect('/client/dashboard')->with('users', $users);
       }
        //return view('home');
    }




//modif user


public function update_admin(Request $request, $id)
{
    $request->validate([
        'owner_name' => 'required',
        'email' => 'required|email',
        'owner_phone' => 'required'
    ]);

    // Retrieve the authenticated user
    $user = Auth::user();

    
    

    // Update user attributes
    $user->owner_name = $request->owner_name;
    $user->email = $request->email;
    $user->owner_phone = $request->owner_phone;

    // Save changes to the database
    if ($user->save()) {
        return redirect('/admin/profile/{$id}')->with('success', 'Your Profile was successfully updated');
    } else {
        return redirect('/admin/profile/{$id}')->with('error', 'Failed to update profile');
    }
}

 
        //interface pour modfifier une subbscription
        public function updateinteradmin($id) {
            
            $users=User::all();
            return view('admin.profile.index')->with('users', $users);
        }






        public function update_client(Request $request, $id)
        {
            $request->validate([
                'owner_name' => 'required',
                'email' => 'required|email',
                'owner_phone' => 'required'
            ]);
        
            // Retrieve the authenticated user
            $user = Auth::user();
        
            // Ensure $user is an instance of the User model
            if (!($user instanceof \App\Models\User)) {
                return redirect('/client/profile/{$id}')->with('error', 'User object is not an instance of User model');
            }
        
            // Update user attributes
            $user->owner_name = $request->owner_name;
            $user->email = $request->email;
            $user->owner_phone = $request->owner_phone;
        
            // Save changes to the database
            if ($user->save()) {
                return redirect('/client/profile/{$id}')->with('success', 'Your Profile was successfully updated');
            } else {
                return redirect('/client/profile/{$id}')->with('error', 'Failed to update profile');
            }
        }



        
        //interface pour modfifier une subbscription
        public function updateinterclient($id) {
            
            $users=User::all();
            return view('client.profile.index')->with('users', $users);
        }

        public function updatePasswordadmin(Request $request, $id) {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|string|min:8|confirmed',
            ]);
        
            $user = Auth::user();
        
         
        
            // Vérifier si l'utilisateur est un administrateur
            if ($user->role === 'admin') {
                // Affecter directement le nouveau mot de passe sans hacher
                $user->password = $request->new_password;
            } else {
                // Si ce n'est pas un administrateur, hacher le nouveau mot de passe
                $user->password = Hash::make($request->new_password);
            }
        
            if ($user->save()) {
                return redirect("/admin/profile/{$id}")->with('success', 'Password successfully updated');
            } else {
                return redirect("/admin/profile/{$id}")->with('success', 'Failed to update password');
            }
        }
        




        public function updatePasswordclient(Request $request, $id) {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|string|min:8|confirmed',
            ]);
        
            $user = Auth::user();
        
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect("/client/profile/{$id}")->with('success', 'Current password is incorrect');
            }
        
            $user->password = Hash::make($request->new_password);
        
            if ($user->save()) {
                return redirect("/client/profile/{$id}")->with('success', 'Password successfully updated');
            } else {
                return redirect("/client/profile/{$id}")->with('success', 'Failed to update password');
            }
        }
        


}
