<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demo;
class DemoController extends Controller
{
    //
        //affichage de a liste
        public function index(){
            $demo=Demo::where('id',1)->first();
            return view('admin.demo.index', compact('demo'));
        }
           
    
        public function update(Request $request){
    
            $request->validate([
               
                'heading'=>['required']
            ]);
    
    
            $demo=Demo::where('id',1)->first();
            if($request->photo !=''){
                $request->validate([
                    'photo'=>['mimes:jpeg,jpg,png,svg'],
                ]);
                if($demo->photo!=''){
                    unlink(public_path('uploads/'.$demo->photo));
                }
                $file_name='setting_'.time().'.'.$request->photo->extension();
                $request->photo->move(public_path('uploads'),$file_name);
                $demo->photo=$file_name;
            }
            $demo->subheading=$request->subheading;
            $demo->heading=$request->heading;
            $demo->text=$request->text;
            $demo->button_text=$request->button_text;
    
            if ($demo->update()) {
                
                    // Retrieve the updated setting and pass it to the view
                    $demo = Demo::findOrFail(1);
                    return redirect('/admin/demo')->with('success', 'Subscription successfully updated');
            } 
    
            else{
                echo "erreur";
            }
    
    
    
           
        }
    
    
}
