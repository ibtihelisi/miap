<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;
class TableController extends Controller
{
    //


    public function index(){
       
        return view('client.table.index');
    }


    //interface pour ajouter une subbscription
    public function create() {
        return view('client.table.create');
    }



    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'size'=>'required',
            'area'=>'required',
           
        ]);


        $user = Auth::user();

        $table=new Table();
        $table->name=$request->name;
        $table->size=$request->size;
        $table->area_id=$request->area;
        $table->user_id = $user->id; 
        

        if ($table->save())
        {return view('client.table.index')->with('success', ' Table successfully added');
        }else{
            echo"error";
        }


    }



      



}
