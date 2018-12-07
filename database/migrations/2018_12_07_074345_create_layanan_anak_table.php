<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLayananAnakTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('layanan_anak', function(Blueprint $table)
		{
			$table->integer('id_layanan', true);
			$table->integer('no_layanan');
			$table->integer('id_anak')->index('id_anak');
			$table->float('timbang', 10, 0);
			$table->string('pelayanan', 32);
			$table->string('imunisasi', 32);
			$table->date('tanggal');
			$table->integer('id_bpertb');
			$table->string('standart_timbang', 32);
			$table->string('hasil_timbang', 32);
			$table->string('status_gizi', 16);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('layanan_anak');
	}

}
