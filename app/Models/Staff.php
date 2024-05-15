<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;


    public function tables()
    {
        return $this->hasMany(Table::class, 'table_id','id');
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');


    }

    public function areas()
{
    return $this->belongsToMany(Area::class, 'area_staff', 'staff_id', 'area_id');
}

     
   
    
}



