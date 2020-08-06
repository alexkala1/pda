<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Trapezi;


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
	}
}
