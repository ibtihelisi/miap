<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'etat',
        'user_id',
        'table_id',
        // Ajoutez d'autres champs fillable si nécessaire
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'order_item', 'commande_id', 'item_id')
                    ->withPivot('quantity');
    }


    


    public function table(){
        return $this->belongsTo(Table::class,'table_id','id');
    }


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
