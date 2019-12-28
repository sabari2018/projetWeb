<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CentreMedical extends Model
{
    protected $fillable = [
        'id',
        'libelle',
        'adresse',
        'horaire'
    ];

    public function typeCentreMedical(){

        return $this->belongsTo(TypeCentreMedical::class);
    }

    public function medecins(){

        return $this->hasMany(Medecin::class);
    }
}
