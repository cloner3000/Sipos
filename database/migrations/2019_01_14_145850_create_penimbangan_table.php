<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenimbanganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('penimbangan', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->float('berat_penimbangan', 10, 0);
			$table->date('tanggal_penimbangan');
			$table->integer('id_rergister')->index('id_rergister');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('penimbangan');
	}

}
