<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePuskesmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('puskesmas', function(Blueprint $table)
		{
			$table->integer('id_puskesmas', true);
			$table->string('no_puskesmas', 32);
			$table->string('nama_puskesmas', 32);
			$table->integer('id_kecamatan')->index('id_kecamatan');
			$table->integer('id_ku');
			$table->dateTime('timestamps');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('puskesmas');
	}

}
