<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    use HasFactory;

    public function users() 
    {
       return $this->belongsTo(User::class,'user_id','id');
   }

   
   public function expenses()
   {
       return $this->hasMany(Expense::class,'expensecategory_id','id');
   }
}
