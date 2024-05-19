<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    public function lignecommandes(){
        return $this->hasMany(LigneCommande::class ,'commande_id','id');

    }




    public function table(){
        return $this->belongsTo(Table::class,'table_id','id');
    }


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
