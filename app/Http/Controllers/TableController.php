<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Table;
use App\Models\Area;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class TableController extends Controller
{
    //


    public function index(){
        $user = Auth::user();
        $tables = $user->tables ;// Récupère toutes les zones de l'utilisateur connecté
        
        $areas = $user->areas; // Récupère toutes les zones de l'utilisateur connecté
       
        return view('client.table.index',compact('user','tables','areas'));
    }


    //interface pour ajouter une subbscription
    public function create() {
        $user = Auth::user();
        $tables = $user->tables; // Récupère toutes les Tables de l'utilisateur connecté
        $areas = $user->areas; // Récupère toutes les zones de l'utilisateur connecté

        

        return view('client.table.create',compact('user','tables','areas'));
    }



    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'size' => 'required|numeric|min:1',
            'area' => 'required',
        ]);

        // Validation des données du formulaire
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:tables,name,NULL,id,area_id,'.$request->input('area'), // Vérifie l'unicité du nom dans une zone spécifique
            'size' => 'required|integer|min:1',
            'area' => 'required|exists:areas,id', // Assure que l'ID de la zone existe
        ]);
    
        // Vérification de la validation
        if ($validator->fails()) {
            // Récupération de l'utilisateur connecté
            $user = Auth::user();
    
            // Récupération des tables de l'utilisateur
            $tables = $user->tables;
    
            // Récupération des zones de l'utilisateur
            $areas = $user->areas;
    
            // Retourne la vue avec les erreurs, les tables et les zones
            return  redirect()->route('table.index')->with('error', 'This table  already exists')->with('tables', $tables)->with('areas', $areas);
        }
    
        $user = Auth::user();
        $tables = $user->tables;
        // Récupération des zones de l'utilisateur
        $areas = $user->areas;
    
       
        $table = new Table();
        $table->name = $request->name;
        $table->size = $request->size;
        $table->area_id = $request->area;
        $table->user_id = $user->id;
    
        if ($table->save()) {
            // Redirection vers la page d'index des tables après l'ajout réussi
            return redirect()->route('table.index')->with('success', 'Table successfully added');
        } else {
            // En cas d'échec, retourne à la page d'index avec un message d'erreur
            return redirect()->route('table.index')->with('error', 'Failed to add table');
        }
    }
    


        //supprimer produit
        public function destroy($id) {

            $table =Table::find($id);


            if($table->delete()){
                return redirect()->back()->with('success', 'Table successfully deleted. ');
            }else{echo"erreur"
            ;}
        }


        public function update(Request $request) {
            $request->validate([
                'name' => 'required',
                'size' => 'required',
                'area' => 'required|exists:areas,id',
            ]);
        
            $id = $request->idtable;
            $table = Table::find($id);
        
            // Vérifier si le nom de la table a été modifié
            if ($request->name !== $table->name || $request->area != $table->area_id) {
                // Si le nom ou la zone a été modifié, vérifier l'unicité du nouveau nom dans la nouvelle zone
                $validator = Validator::make($request->all(), [
                    'name' => 'required|unique:tables,name,NULL,id,area_id,' . $request->input('area'),
                ]);
        
                if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                }
            }
        
            $table->name = $request->name;
            $table->size = $request->size;
            $table->area_id = $request->area;
        
            if($table->update()) {
                return redirect()->back()->with('success', 'Table successfully updated.');
            } else {
                return redirect()->back()->with('error', 'Error updating table.');
            }
        }
        



}
