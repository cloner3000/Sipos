<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLayananIbuWuspusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('layanan_ibu_wuspus', function(Blueprint $table)
		{
			$table->integer('id_layanan', true);
			$table->string('no_layanan', 32);
			$table->integer('id_ibu')->index('id_ibu');
			$table->string('lila', 64);
			$table->string('pelayanan', 32);
			$table->date('tanggal_pelayanan');
			$table->string('kontrasepsi_lama', 32);
			$table->string('kontrasepsi_baru', 32);
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
		Schema::drop('layanan_ibu_wuspus');
	}

}
