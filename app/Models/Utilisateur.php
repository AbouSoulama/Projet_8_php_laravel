<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Tuteur;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'path',
    ];

    public function image()
    {
        return $this->hasOne(Image::class);
    }
    
    public function tuteur()
    {
        return $this->belongsTo(Tuteur::class);
        
    }
}
