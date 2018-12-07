<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIbuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ibu', function(Blueprint $table)
		{
			$table->integer('id_ibu', true);
			$table->string('nama', 32);
			$table->string('no', 32);
			$table->string('alamat', 64);
			$table->integer('id_desa')->index('id_desa');
			$table->integer('id_posyandu')->index('id_posyandu');
			$table->string('nama_suami', 32);
			$table->date('tanggal_lahir');
			$table->string('no_telepon', 15);
			$table->string('kelompok_dasawisma', 20);
			$table->date('tanggal_meninggal');
			$table->string('penyebab_meninggal', 64);
			$table->string('tahapan_ks', 20);
			$table->string('keadaan_ibu', 20);
			$table->integer('id_ku');
			$table->dateTime('timestamp');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ibu');
	}

}
