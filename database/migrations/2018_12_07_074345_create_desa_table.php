<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDesaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('desa', function(Blueprint $table)
		{
			$table->integer('id_desa', true);
			$table->string('no_desa', 32);
			$table->string('nama_desa', 32);
			$table->integer('id_kecamatan')->index('id_kecamatan');
			$table->integer('id_ku');
			$table->dateTime('timestamp');
			$table->string('no_puskesmas', 32);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('desa');
	}

}
