<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
	use SoftDeletes;

	protected $fillable = [
		'price',
		'payment_status',
		'payment_amount',
		'notes',
		'status',
		'user_id',
		'customerTable_id',
		'product_id',
	];

	public function customerTables()
	{
		return $this->belongsTo('App\CustomerTable');
	}

	public function products()
	{
		return $this->hasMany('App\Product');
	}
}
