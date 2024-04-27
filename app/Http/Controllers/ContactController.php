<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //



         //affichage de a liste
         public function index(){
            $contact=Contact::where('id',1)->first();
            return view('admin.contact.index', compact('contact'));
        }
           
    
        public function update(Request $request){
    
            
    
    
            $contact=Contact::where('id',1)->first();
            
            $contact->title=$request->title;
            $contact->desc=$request->desc;
            $contact->face_link=$request->face_link;
            $contact->insta_link=$request->insta_link;
            $contact->tel=$request->tel;
            $contact->email=$request->email;
            

            
    
            if ($contact->update()) {
                
                    // Retrieve the updated setting and pass it to the view
                    $contact = Contact::findOrFail(1);
                    return redirect('/admin/contacts')->with('success', 'Contact successfully updated');
            } 
    
            else{
                echo "erreur";
            }
    
           
    
    
           
        }
}
