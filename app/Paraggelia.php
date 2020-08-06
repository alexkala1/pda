<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paraggelia extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'price',
        'payment_status',
        'payment_amount',
        'notes',
        'status',
        'user_id',
        'trapezi_id',
        'proion_id',
    ];

    public function trapezia()
    {
        return $this->belongsTo('App\Trapezi');
    }

    public function proionta()
    {
        return $this->hasMany('App\proion');
    }
}
