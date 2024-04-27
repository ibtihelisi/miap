<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
      //affichage de a liste
     public function index(){
        $setting=Setting::where('id',1)->first();
        return view('admin.settings.index', compact('setting'));
    }
       

    public function update(Request $request){

        $request->validate([
           
            'heading'=>['required']
        ]);


        $obj=Setting::where('id',1)->first();
        if($request->photo !=''){
            $request->validate([
                'photo'=>['mimes:jpeg,jpg,png,svg'],
            ]);
            if($obj->photo!=''){
                unlink(public_path('uploads/'.$obj->photo));
            }
            $file_name='setting_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads'),$file_name);
            $obj->photo=$file_name;
        }
        $obj->subheading=$request->subheading;
        $obj->heading=$request->heading;
        $obj->text=$request->text;
        $obj->button_text=$request->button_text;

        if ($obj->update()) {
            
                // Retrieve the updated setting and pass it to the view
                $setting = Setting::findOrFail(1);
                return redirect('/admin/settings')->with('success', 'Subscription successfully updated');
        } 

        else{
            echo "erreur";
        }

        $obj->update();


       
    }


}
