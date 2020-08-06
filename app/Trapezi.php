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
        return $this->hasOne('App\paraggelia');
	}

	public function getStatusAttribute()
	{
		if ($this->customers == null) {
			return 'Το τραπέζι είναι άδειο';
		}

		if ($this->paraggelia_id == null) {
			return 'Pending';
		} else {
			return 'An order is awaiting';
		}
	}
}
