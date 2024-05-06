<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consommateur extends Model
{
    use HasFactory;

    public function commande(){

        return $this->hasMany(Commande::class ,'consommateur_id','id');
    }
}
