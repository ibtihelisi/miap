<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Why;


class WhyController extends Controller
{
    


        //
        public function index(){
            $whies = Why::all(); 
            $why = Why::all(); 
           return view('admin.why.index', compact('whies','why'));
       }



        // ajouter une feature a la liste 
        public function store(Request $request){

            
            $request->validate([
               'title'=>['required']
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
    
    
    
    
        
            $why=new Why();
            $why->title=$request->title;
            $why->desc1=$request->desc1;
            $why->desc2=$request->desc2;
            $why->desc3=$request->desc3;
            $why->icon=$newname;
           
           
            
    
            if ($why->save())
            {return redirect()->back()->with('success','feature added successfully');
            }else{
                echo"error";
            }
    
    
       }


            

    //supprimer subscription plan
    public function destroy($id) {

        $why =Why::find($id);

        if($why->delete()){
            return redirect()->back()->with('success', 'Feature successfully removed from database. ');
        }else{echo"erreur"
        ;}
        
        
    }




    public function update(Request $request, $id){

        $request->validate([
            
        ]);
    
      
        $why=Why::find($id);

        if($request->icon !=''){
            $request->validate([
                'icon'=>['mimes:jpeg,jpg,png,svg'],
            ]);
            if($why->icon!=''){
                unlink(public_path('uploads/'.$why->icon));
            }
            $file_name='setting_'.time().'.'.$request->icon->extension();
            $request->icon->move(public_path('uploads'),$file_name);
            $why->icon=$file_name;
        }

        $why->title = $request->title;
        $why->desc1 = $request->desc1;
        $why->desc2 = $request->desc2;
        $why->desc3 = $request->desc3;
    
        if ($why->update()) {
            // Redirigez vers la page d'index des fonctionnalités après une mise à jour réussie
            return redirect()->back()->with('success', 'Feature item updated successfully');
        } else {
            // Gérez les erreurs si la sauvegarde échoue
            return back()->with('error', 'Failed to update feature item');
        }// Assurez-vous que les noms de champ correspondent aux noms dans le formulaire
    }
    


}
