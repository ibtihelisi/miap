<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Response as FacadeResponse;

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
            $subscriptions = Subscription::find($id);
            return view('admin.subscriptions.update')->with('subscriptions', $subscriptions);
        }

        
    // ajouter une subscription a la liste 
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            
            'price'=>'required',
           
            'period'=>'required',
           
            
        ]);

        $subscription=new Subscription();
        $subscription->name=$request->name;
        $subscription->description=$request->description;
       
        $subscription->price=$request->price;
        $subscription->period=$request->period;
      

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


    //modif subscription
     public function update(Request $request ,$id )  {

        $request->validate([
            'name'=>'required',
            'description'=>'required',

            'price'=>'required',
           
            'period'=>'required',
          
        ]);
         
      

        $subscription =Subscription::find($id);

        if (!$subscription) {
            return redirect('/admin/subscriptions')->with('error', 'Subscription not found');
        }
        $subscription->name=$request->name;
        $subscription->description=$request->description;
       
        $subscription->price=$request->price;
      
        $subscription->period=$request->period;
        

         if ($subscription->update()) {
            return redirect('/admin/subscriptions')->with('success', 'Subscription successfully updated');
        } 

        else{
            echo "erreur";
        }


       
        
     }


     //exportcsv file
     public function export()
     {
         // Fetch subscriptions data
         $subscriptions = Subscription::all();
     
         // Define CSV headers
         $headers = [
             'Content-Type' => 'text/csv',
             'Content-Disposition' => 'attachment; filename=subscriptions.csv',
         ];
     
         // Create CSV file content
         $callback = function () use ($subscriptions) {
             $file = fopen('php://output', 'w');
     
             // Write CSV headers
             fputcsv($file, ['Name', 'Description', 'Price', 'Period', ]);
     
             // Write CSV rows
             foreach ($subscriptions as $subscription) {
                 fputcsv($file, [$subscription->name, $subscription->description, $subscription->price, $subscription->period]);
             }
     
             fclose($file);
         };
     
         // Return CSV file as response
         return FacadeResponse::stream($callback, 200, $headers);
     }
    
}
