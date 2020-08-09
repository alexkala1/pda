<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerTable extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'meros',
        'price',
        'customers',
        'order_id',
        'user_id',
    ];

    public function Orders()
    {
        return $this->hasOne('App\Order');
	}

	public function getStatusAttribute()
	{
		if ($this->customers == null) {
			return 'Το τραπέζι είναι άδειο';
		}

		if ($this->order_id == null) {
			return 'Ordered';
		} else {
			return 'An order is awaiting';
		}
	}
}
