<?php

use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('houses')->delete();

		\DB::table('houses')->insert([
			[
				'title' => 'Полулюкс',
				'price' => 3000,
				'persons_num' => 3
			],
			[
				'title' => 'Люкс',
				'price' => 5000,
				'persons_num' => 2
			],
		]);
	}
}
