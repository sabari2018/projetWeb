<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCentreMedical extends Model
{
    protected $fillable = [
        'id',
        'libelle'
    ];

    public function centreMedicals(){

        return $this->hasMany(CentreMedical::class);
    }
}
