<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePemberianAsiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pemberian_asi', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_register')->index('id_register');
			$table->date('e0')->nullable();
			$table->date('e1')->nullable();
			$table->date('e2')->nullable();
			$table->date('e3')->nullable();
			$table->date('e4')->nullable();
			$table->date('e5')->nullable();
			$table->date('e6')->nullable();
			$table->date('e7_asi')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pemberian_asi');
	}

}
