<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(HousesTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
