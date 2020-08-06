<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Trapezi;
use App\Proion;


class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'name' => 'default',
			'surname' => 'user',
			'password' => Hash::make('asdasdasd'),
			'email' => 'asd@asd.asd',
			'type' => 'adminos'
		]);

		for ($i = 0; $i < 50; $i++){
			Trapezi::insert([
				'meros' => 'Paralia',
				'customers' => mt_rand(2, 6)
			]);
		}

		for ($i = 1; $i <= 50; $i++) {
			Proion::insert([
				'name' => 'proion ' . $i,
				'prefix' => 'wip',
				'type' => 'WIP',
				'category' => 'drink',
				'price' => mt_rand(10, 100) / 10,
				'availability' => true,
			]);
		}
	}
}
