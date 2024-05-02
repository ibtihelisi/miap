<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;


    public function tables()
    {
        return $this->hasMany(Table::class,'table_id','id');
    }


    public function staff()
    {
        return $this->belongsToMany(Staff::class,'staff_id','id');
    }



    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
