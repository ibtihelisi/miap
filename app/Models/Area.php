<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;


    public function tables()
    {
        return $this->hasMany(Table::class,'area_id','id');
    }

    public function staff()
    {
        return $this->belongsToMany(Staff::class, 'area_staff', 'area_id', 'staff_id');
    }

    



    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
