<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\CustomerTable;
use App\Product;
use App\Order;
use App\User;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		User::create([
			'name' => 'default',
			'surname' => 'user',
			'password' => Hash::make('asdasdasd'),
			'email' => 'asd@asd.asd',
			'type' => 'adminos'
		]);

		for ($i = 0; $i < 50; $i++){
			CustomerTable::create([
				'meros' => 'Paralia',
				'customers' => mt_rand(0, 6)
			]);
		}

		$tables = CustomerTable::all();
		foreach ($tables as $table) {
			if ($table->customers > 0) {
				$order = Order::create([
					'price' => mt_rand(100, 1000) / 10,
					'has_paid' => (bool)random_int(0,1),
					'user_id' => 1,
					'customer_table_id' => $table->id,
					'product_id' => mt_rand(1,50)
				]);
				if ($order->has_paid == 'true') {
					$order->payment_amount = $order->price;
				}
			}
		}

		for ($i = 1; $i <= 50; $i++) {
			Product::create([
				'name' => 'product ' . $i,
				'prefix' => 'wip',
				'type' => 'WIP',
				'category' => 'drink',
				'price' => mt_rand(10, 100) / 10,
				'availability' => true,
			]);
		}
	}
}
