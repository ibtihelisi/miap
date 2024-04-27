<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Features;

class FeaturesController extends Controller
{
    //
    public function index(){
         $features = Features::all(); 
        $feature=Features::where('id',1)->first();
        return view('admin.features.index', compact('feature','features'));
    }



        // ajouter une feature a la liste 
        public function store(Request $request){

            
             $request->validate([
                'feature_item_title'=>['required']
             ]);
             
             $newname =uniqid();//4fd7a
             $image=$request->file('icon');
     
             //si je veux récupére l'extension de l'image
             $newname .=".". $image->getClientOriginalExtension();//.jpeg
     
             //upload image
             $destinationPath='uploads';
             $image->move($destinationPath ,$newname);
     
             
              
     
            //si  je veux récupere le nom de l'image 
           // echo $image->getClientOriginalName();
     
     
           //taille
           //echo $image->getSize();
     
     
     
     
         
             $feature=new Features();
             $feature->Title=$request->title;
             $feature->span=$request->span;
             $feature->icon=$newname;
             $feature->feature_item_title=$request->feature_item_title;
             $feature->feature_item_paragraph=$request->feature_item_paragraph;
            
             
     
             
     
             if ($feature->save())
             {return redirect()->back()->with('success','feature added successfully');
             }else{
                 echo"error";
             }
     
     
        }




        public function update(Request $request){

            $request->validate([
               
                'title'=>['required']
            ]);
    
    
            $obj=Features::where('id',1)->first();
           
            $obj->Title=$request->title;
            $obj->span=$request->span;
            $obj->icon=$request->icon;
            $obj->feature_item_title=$request->feature_item_title;
            $obj->feature_item_paragraph=$request->feature_item_paragraph;
    
            if ($obj->update()) {
                
                    // Retrieve the updated setting and pass it to the view
                    $feature = Features::findOrFail(1);
                    return back() ->with('success','Home page updated Successfully');
    
                } 
    
            else{
                echo "erreur";
            }
    
            
    
    
           
        }



        public function item_update(Request $request, $id){

            $request->validate([
                
            ]);
        
            //$feature = Features::where('id', '!=', 1)->findOrFail($id);
          
            $feat=Features::find($id);

            if($request->icon !=''){
                $request->validate([
                    'icon'=>['mimes:jpeg,jpg,png,svg'],
                ]);
                if($feat->icon!=''){
                    unlink(public_path('uploads/'.$feat->icon));
                }
                $file_name='setting_'.time().'.'.$request->icon->extension();
                $request->icon->move(public_path('uploads'),$file_name);
                $feat->icon=$file_name;
            }

            $feat->feature_item_title = $request->feature_item_title;
           
            $feat->feature_item_paragraph = $request->feature_item_paragraph;
        
            if ($feat->update()) {
                // Redirigez vers la page d'index des fonctionnalités après une mise à jour réussie
                return redirect()->route('admin.features.index')->with('success', 'Feature item updated successfully');
            } else {
                // Gérez les erreurs si la sauvegarde échoue
                return back()->with('error', 'Failed to update feature item');
            }// Assurez-vous que les noms de champ correspondent aux noms dans le formulaire
        }
        


        

    //supprimer subscription plan
    public function destroy($id) {

        $feature =Features::find($id);

        if($feature->delete()){
            return redirect()->back()->with('success', 'Feature successfully removed from database. ');
        }else{echo"erreur"
        ;}
        
        
    }



    
}
