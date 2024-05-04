<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Item;

use Illuminate\Support\Facades\Auth;



class ConsomateurController extends Controller
{
    //


      //affichage de a liste
      public function index($id){
        $users=User::all();
        $user = Auth::user();
        $categories=Category::all();
        $items=Item::all();
        return view('consomateur.index')->with('users',$users)->with('categories',$categories)->with('items',$items)->with('user',$user);
    }

 
 
}
