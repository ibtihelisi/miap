<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'restaurant_name' => ['required', 'string', 'max:255'],
            'desc' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'location' => ['required', 'string', 'max:255'],
            'location2' => ['nullable', 'string', 'max:255'],
            'governorate' => ['required', 'string' ,'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'patnumber' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:4'],
            'owner_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'owner_phone' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        
       
    }

    protected function create(array $data)
{
    $logoPath = null;

    if (isset($data['logo'])) {
        $newName = uniqid() . '.' . $data['logo']->getClientOriginalExtension();
        $data['logo']->move(public_path('uploads'), $newName);
        $logoPath = $newName;
    }

    return User::create([
        'restaurant_name' => $data['restaurant_name'],
        'desc' => $data['desc'],
        'logo' => $logoPath,
        'location' => $data['location'],
        'location2' => $data['location2'],
        'governorate' => $data['governorate'], // Ensure this is included
        'city' => $data['city'],
        'patnumber' => $data['patnumber'],
        'postal_code' => $data['postal_code'],
        'owner_name' => $data['owner_name'],
        'email' => $data['email'],
        'owner_phone' => $data['owner_phone'],
        'password' => Hash::make($data['password']),
        'plan' => $data['plan'] ?? 'free',
    ]);
}

}
