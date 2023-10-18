<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Utilisateur;
use App\Models\Tuteur;

class utilisateurcontroller extends Controller
{
   public function liste_utilisateur() 
   {
       $utilisateurs = Utilisateur::all();
       return view('utilisateur.liste',compact('utilisateurs'));
   }
   public function  ajouter_utilisateur()
   {
       $tuteurs = Tuteur::all();
       return view('utilisateur.ajouter', compact('tuteurs'));
   }
   public function ajouter_utilisateur_traitement(Request $request)
   {
     $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'email'=> 'required',
         'path'=> 'required',
         'tuteur'=> 'required',
     ]);
     $utilisateur = new Utilisateur();
     $utilisateur->nom = $request->nom;
     $utilisateur->prenom = $request->prenom;
     $utilisateur->email = $request->email;
     $utilisateur->path = $request->path;
     $utilisateur->tuteur_id = $request->tuteur;
     $utilisateur-> save();
     
     return redirect('/ajouter')->with('status', 'L\'utilisateur a bien été ajouter avec succes.');
   }
   
   public function update_utilisateur($id){
       $utilisateurs = Utilisateur::find($id);
       
       
       return view('utilisateur.update',compact('utilisateurs'));
   }
   
   public function update_utilisateur_traitement(Request $request){
    $request->validate([
        'nom'=> 'required',
        'prenom'=> 'required',
        'email'=> 'required',
        // 'path'=> 'required',
        // 'tuteur'=> 'required',
    ]);
    $utilisateur = Utilisateur::find($request->id);
    $utilisateur->nom = $request->nom;
    $utilisateur->prenom = $request->prenom;
    $utilisateur->email = $request->email;
    // $utilisateur->path = $request->path;
    // $utilisateur->tuteur = $request->tuteur_id;
    $utilisateur-> update();
    return redirect('/utilisateur')->with('status', 'L\'utilisateur a bien été modifié avec succes.');
   }
   
   public function delete_utilisateur($id){
       $utilisateur = Utilisateur::find($id);
       $utilisateur->delete();
       return redirect('/utilisateur')->with('status', 'L\'utilisateur a bien été supprimé avec succes.');
   }
}
