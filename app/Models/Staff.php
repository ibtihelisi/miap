<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;


    public function tables()
    {
        return $this->hasManyThrough(Table::class, 'table_id','id');
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');


    }

    public function areas()
    {
        return $this->belongsToMany(Area::class,'staff_id','id');
    }
     
   
    
}



