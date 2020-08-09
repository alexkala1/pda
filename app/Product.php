<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
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
		'order_id'
    ];

    public function orders()
    {
        return $this->belongsTo('App\Order');
    }
}
