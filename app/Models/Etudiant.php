<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom', 
        'adresse', 
        'telephone', 
        'email', 
        'date_de_naissance', 
        'ville_id'
    ];

      // Define the relationship to Ville
      public function ville()
      {
          return $this->belongsTo(Ville::class);
      }
}
