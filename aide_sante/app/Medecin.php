<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'specialite',
        'adresse',
        'email',
        'photo',
    ];

    public function centreMedical(){

        return $this->belongsTo(CentreMedical::class);
    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
