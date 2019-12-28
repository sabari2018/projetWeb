<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    protected $fillable = [
        'id',
        'libelle'
    ];

    public function users(){

        return $this->hasMany(User::class);
    }
}
