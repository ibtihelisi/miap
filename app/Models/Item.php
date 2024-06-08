<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class ,'category_id' ,'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class ,'user_id' ,'id');
    }

    

    public function commandes()
    {
        return $this->belongsToMany(Commande::class, 'order_item', 'item_id', 'commande_id')
                    ->withPivot('quantity');
    }

 


      // Méthode pour raccourcir la description si elle est trop longue
      public function shortDescription($length = 100)
      {
          if (strlen($this->description) > $length) {
              return substr($this->description, 0, $length) . '...';
          }
  
          return $this->description;
      }

}
