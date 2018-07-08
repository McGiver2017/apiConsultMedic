<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $fillable = [
        'name',
        'lastName',
        'partner_id'
    ];
    public function Partner()
    {
        return $this->belongsTo('App\Partner');
    }
}
