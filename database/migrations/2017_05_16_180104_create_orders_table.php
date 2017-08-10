<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function (Blueprint $table)
		{
			$table->increments('id');
			$table->boolean('active')->default(false);
			$table->string('name');
			$table->string('phone');
			$table->string('email')->nullable();
			$table->string('from');
			$table->string('to');
			$table->integer('persons_num');
			$table->string('house');
			$table->boolean('has_food')->default(false);
			$table->text('comments')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('orders');
	}
}