<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'contenue',
        'image',
        'source',
        'lien',
        'visibilite'
    ];
}
