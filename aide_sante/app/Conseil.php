<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conseil extends Model
{
    protected $fillable = [
        'id',
        'titre',
        'description',
        'lien'
    ];
}