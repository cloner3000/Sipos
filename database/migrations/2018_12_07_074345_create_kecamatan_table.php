<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKecamatanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kecamatan', function(Blueprint $table)
		{
			$table->integer('id_kecamatan', true);
			$table->string('no_kecamatan', 32);
			$table->string('nama_kecamatan', 32);
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
		Schema::drop('kecamatan');
	}

}
