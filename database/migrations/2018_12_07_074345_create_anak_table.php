<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnakTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anak', function(Blueprint $table)
		{
			$table->integer('id_anak', true);
			$table->string('no_anak', 32);
			$table->integer('id_ibu')->index('id_ibu');
			$table->integer('anak_ke');
			$table->string('nama', 32);
			$table->date('tanggal_lahir');
			$table->string('jenis_kelamin', 16);
			$table->date('tanggal_meninggal')->nullable();
			$table->string('penyebab_meninggal', 64)->nullable();
			$table->string('penolong_persalinan', 32)->nullable();
			$table->integer('berat_bayi_lahir');
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
		Schema::drop('anak');
	}

}
