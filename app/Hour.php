<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $fillable = [
        'schedule_id',
        'hour',
        'estado'
    ];
}
