<?php

namespace App\Models;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tuteur extends Model
{
    use HasFactory;
    
   public function utilisateur()
   {
       
       return $this->belongsTo(Utilisateur::class); 
       
   } 
}
