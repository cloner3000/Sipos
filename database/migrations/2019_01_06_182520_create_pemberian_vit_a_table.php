<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePemberianVitATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pemberian_vit_a', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_register')->index('id_register');
			$table->date('tanggal_pemberian');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pemberian_vit_a');
	}

}
