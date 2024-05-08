<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;



    public function items()
    {
        return $this->hasMany(Item::class, 'user_id', 'id');
    }

    public function categories()
    {
    return $this->hasMany(Category::class, 'user_id', 'id');
    }

    public function subscriptions() 
     {
        return $this->belongsTo(Subscription::class,'user_id','id');
    }
    
    public function staff() 
     {
        return $this->hasMany(Staff::class,'user_id','id');
    }


    public function areas()
    {
        return $this->hasMany(Area::class,'user_id','id');
    }

    public function tables()
    {
        return $this->hasMany(Table::class,'user_id','id');
    }
    public function commande(){

        return $this->hasMany(Commande::class ,'user_id','id');
    }
    
    

    

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
       /* 'name',
        'email',
        'password',
        'role'*/
        'restaurant_name',
        'location',
        'logo',
        'desc',
        'owner_name',
        'email',
        'owner_phone',
        'active',
        'password',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        
    ];
}
