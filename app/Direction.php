<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $fillable = [
        'city',
        'complement',
        'neighborhood',
        'state',
        'street',
        'number',
        'type'
    ];
}
