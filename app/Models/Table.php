<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\User;

class Table extends Model
{
    use HasFactory;


    public function area()
    {
        return $this->belongsTo(Area::class,'area_id','id');
    }


    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function commande(){

        return $this->hasMany(Commande::class ,'table_id','id');
    }



}
