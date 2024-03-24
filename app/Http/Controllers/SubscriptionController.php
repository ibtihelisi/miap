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

        //interface pour ajouter une subbscription
        public function create() {
            return view('admin.subscriptions.create');
        }



        
        //interface pour modfifier une subbscription
        public function updateinter($id) {
            $subscription = Subscription::find($id);
            return view('admin.subscriptions.update' , ['subscription' => $subscription]);
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
       

        if ($subscription->save()) {
            return redirect('/admin/subscriptions')->with('success', 'Subscription successfully added');
        } 




    }


    //supprimer subscription plan
    public function destroy($id) {

        $subscription =Subscription::find($id);

        if($subscription->delete()){
            return redirect()->back()->with('success', 'Subscription successfully removed from database. ');
        }else{echo"erreur"
        ;}
        
        
    }


    //modif categorie
     public function update(Request $request )  {

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
         
        $id = $request->idsubscription;

        $subscription =Subscription::find($id);

        $$subscription=new Subscription();
        $subscription->name=$request->name;
        $subscription->description=$request->description;
        $subscription->features_list=$request->features_list;
        $subscription->price=$request->price;
        $subscription->items_limit=$request->items_limit;
        $subscription->period=$request->period;
        $subscription->ordering=$request->ordering;
        $subscription->orders_limit=$request->orders_limit;

         if ($subscription->save()) {
            return redirect('/admin/subscriptions')->with('success', 'Subscription successfully updated');
        } 

        else{
            echo "erreur";
        }


       
        
     }

    
}
