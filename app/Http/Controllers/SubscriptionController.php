<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    //
    //affichage de a liste
    public function index(){
        $subscriptions=Subscription::all();
        return view('admin.subscriptions.index')->with('subscriptions', $subscriptions);
    }



    // ajouter une subscription a la liste 
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'features_list'=>'required',
            'price'=>'required',
            'items_limit'=>'required',
            'period'=>'required',
            'ordering'=>'required',
            'orders_limit'=>'required'
            
        ]);

        $subscription=new Subscription();
        $subscription->name=$request->name;
        $subscription->description=$request->description;
        $subscription->features_list=$request->features_list;
        $subscription->price=$request->price;
        $subscription->items_limit=$request->items_limit;
        $subscription->period=$request->period;
        $subscription->ordering=$request->ordering;
        $subscription->orders_limit=$request->orders_limit;
       

        if ($subscription->save())
        {return redirect()->back();
        }else{
            return redirect()->back()->with('error', 'Error saving subscription.');
  
        }


    }

/*
    //supprimer categorie
    public function destroy($id) {

        $categorie =Category::find($id);

        if($categorie->delete()){
            return redirect()->back();
        }else{echo"erreur"
        ;}
        
        
    }


    //modif categorie
     public function update(Request $request )  {

        $request->validate([
            'name'=>'required',
            'description'=> 'required'

        ]);
         
        $id = $request->idcategory;

        $categorie =Category::find($id);

        $categorie->name=$request->name;
        $categorie->description=$request->description;

        if($categorie->update()){
            return redirect()->back();
        }
        else{
            echo "erreur";
        }


       
        
     }
*/
    
}
