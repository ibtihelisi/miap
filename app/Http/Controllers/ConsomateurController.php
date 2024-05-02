<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Item;



class ConsomateurController extends Controller
{
    //


      //affichage de a liste
      public function index($id){
        $users=User::all();
        $categories=Category::all();
        $items=Item::all();
        return view('consomateur.index')->with('users',$users)->with('categories',$categories)->with('items',$items);
    }

 
 
}
