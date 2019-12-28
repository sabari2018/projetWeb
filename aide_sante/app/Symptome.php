<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptome extends Model
{
    protected $fillable = [
        'id',
        'libelle'
    ];

    public function maladies(){

        return $this->belongsToMany(Maladie::class);
    }

    public function allergies(){

        return $this->belongsToMany(Allergie::class);
    }
}
