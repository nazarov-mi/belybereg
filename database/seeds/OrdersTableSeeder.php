<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$m = \DB::table('houses')->first();
		$house = 'Не указан';

		if (!is_null($m)) {
			$house = $m->title . ', ' . $m->persons_num . ' места';
		}

		\DB::table('orders')->delete();

		\DB::table('orders')->insert([
			[
				'active' => false,
				'name' => 'Скрипка Андрей Игоревич',
				'phone' => '+7 (999) 242-23-65',
				'email' => 'email@domain.loc',
				'from' => '15 мая',
				'to' => '1 июня',
				'persons_num' => '2',
				'house' => $house,
				'has_food' => true,
				'comments' => '',
				'created_at' => date('Y-m-d'),
			],
		]);
	}
}
