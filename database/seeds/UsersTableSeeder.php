<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();

		\DB::table('users')->insert([
			[
				'username' => 'Admin',
				'password' => Hash::make('1'),
				'created_at' => date('Y-m-d'),
			],
		]);
	}
}
