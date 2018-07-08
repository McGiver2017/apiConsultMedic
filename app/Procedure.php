<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    protected $fillable = [
        'code',
        'name',
        'type',
        'specialty_id'
    ];
    public function Specialty()
    {
        return $this->belongsTo('App\Specialty');
    }
}
