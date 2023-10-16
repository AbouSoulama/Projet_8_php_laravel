<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tuteur;

class tuteurcontroller extends Controller
{
    public function liste_tuteur() 
   {
       $tuteurs = Tuteur::all();
       return view('tuteur.liste',compact('tuteurs'));
   }
   public function  ajouter_tuteur()
   {
       return view('tuteur.ajouter');
   }
   public function ajouter_tuteur_traitement(Request $request)
   {
     $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'profession'=> 'required',
         'contact'=> 'required',
     ]);
     $tuteur = new Tuteur();
     $tuteur->nom = $request->nom;
     $tuteur->prenom = $request->prenom;
     $tuteur->profession = $request->profession;
     $tuteur->contact = $request->contact;
     $tuteur-> save();
     
    
   
}
}
