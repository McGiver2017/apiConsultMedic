<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'date',
        'alert',
        'info',
        'arrivalOrder',
        'price',
        'moneda',
        'procedure_id',
        'professional_id'
    ];
    public function Procedure()
    {
        return $this->belongsTo('App\Procedure');
    }
    public function Professional()
    {
        return $this->belongsTo('App\Professional');
    }
    public function Hours()
    {
        return $this->hasMany('App\Hour', 'schedule_id');
    }
}
