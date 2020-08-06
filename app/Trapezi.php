<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trapezi extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'meros',
        'price',
        'customers',
        'paraggelia_id',
        'user_id',
    ];

    public function paraggelies()
    {
        return $this->hasMany('App\paraggelia');
    }
}
