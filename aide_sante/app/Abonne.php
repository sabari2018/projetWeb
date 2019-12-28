<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonne extends Model
{
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'adresse'
    ];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
