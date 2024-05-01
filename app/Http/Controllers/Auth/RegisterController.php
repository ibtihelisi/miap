<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Subscription;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            /*
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],*/


            'restaurant_name' => ['required', 'string', 'max:255'],
            'desc' => ['required', 'string', 'max:255'], // Add 'nullable' rule here
           
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Exemple pour accepter les images JPEG, PNG, JPG, GIF avec une taille maximale de 2 Mo

            'location' => ['required', 'string', 'max:255'], // Add 'nullable' rule here
   
            'owner_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', ],
            'owner_phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    
    {   
        $logoPath = null;

        // Check if logo is provided in the data
        if(isset($data['logo'])) {
            // Store the logo file in the 'uploads' directory
            $newName = uniqid() . '.' . $data['logo']->getClientOriginalExtension();
            $data['logo']->move(public_path('uploads'), $newName);
            $logoPath = $newName;
         }

    // Create a new User instance with the provided data
    return User::create([
        'restaurant_name' => $data['restaurant_name'],
        'desc' => $data['desc'],
        'logo' => $logoPath, // Assign the logo path to the 'logo' field
        'location' => $data['location'],
        'owner_name' => $data['owner_name'],
        'email' => $data['email'],
        'owner_phone' => $data['owner_phone'],
        'password' => Hash::make($data['password']),
    ]);
 
}



    
}
