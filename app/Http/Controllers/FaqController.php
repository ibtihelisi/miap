<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\faq;
class FaqController extends Controller
{
    //
       public function index(){
         $faqs = faq::all(); 
        $faq=faq::where('id',1)->first();
        return view('admin.faq.index', compact('faq','faqs'));
    }



        // ajouter un question et reponse a la liste 
        public function store(Request $request){

            
             $request->validate([
                
             ]);
             
          
     
         
             $faq=new faq();
             $faq->Title=$request->title;
             $faq->question=$request->question;
             $faq->answer=$request->answer;
            
            
             
     
             
     
             if ($faq->save())
             {return redirect()->back()->with('success','Q and A added successfully');
             }else{
                 echo"error";
             }
     
     
        }


            

    //supprimer subscription plan
    public function destroy($id) {

        $faq =faq::find($id);

        if($faq->delete()){
            return redirect()->back()->with('success', 'Q and A successfully removed from database. ');
        }else{echo"erreur"
        ;}
        
        
    }



    public function update(Request $request){

        $request->validate([
           
            'title'=>['required']
        ]);


        $faq=faq::where('id',1)->first();
       
        $faq->Title=$request->title;
        $faq->question=$request->question;
        $faq->answer=$request->answer;
        

        if ($faq->update()) {
            
                // Retrieve the updated setting and pass it to the view
                $faq = faq::findOrFail(1);
                return back() ->with('success','Faq page  updated Successfully');

            } 

        else{
            echo "erreur";
        }

        


       
    }



    public function item_update(Request $request, $id){

        $request->validate([
            
        ]);
    
        //$feature = Features::where('id', '!=', 1)->findOrFail($id);
      
        $faq=faq::find($id);

       
        
        $faq->question=$request->question;
        $faq->answer=$request->answer;
    
        if ($faq->update()) {
            // Redirigez vers la page d'index des fonctionnalités après une mise à jour réussie
            return redirect()->route('admin.faq.index')->with('success', 'FAQ item updated successfully');
        } else {
            // Gérez les erreurs si la sauvegarde échoue
            return back()->with('error', 'Failed to update FAQ item');
        }// Assurez-vous que les noms de champ correspondent aux noms dans le formulaire
    }
    


}
