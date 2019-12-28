<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    protected $fillable = [
        'id',
        'libelle'
    ];

    public function symptomes(){

        return $this->belongsToMany(Symptome::class);
    }
}
