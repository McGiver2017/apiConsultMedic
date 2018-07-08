<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'type',
        'imageUrl'
    ];
    public function Direction()
    {
        return $this->hasOne('App\Direction', 'direction_id');
    }
}
