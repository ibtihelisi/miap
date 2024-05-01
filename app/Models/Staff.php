<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;


    public function tables()
    {
        return $this->hasManyThrough(Table::class, Area::class);
    }
     
   
    
}



