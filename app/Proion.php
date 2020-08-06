<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proion extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'prefix',
        'type',
        'category',
        'ingredients',
        'price',
        'availability',
        'notes',
    ];

    public function paraggelies()
    {
        return $this->belongsTo('App\Paraggelia');
    }
}
