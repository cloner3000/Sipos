<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLayananIbuHamilTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('layanan_ibu_hamil', function(Blueprint $table)
		{
			$table->integer('id_layanan', true);
			$table->integer('no_layanan');
			$table->integer('id_ibu')->index('id_ibu');
			$table->string('pelayanan', 32);
			$table->date('tanggal_pelayanan');
			$table->float('umur_kehamilan', 10, 0);
			$table->string('risiko_kehamilan', 32);
			$table->float('berat_badan', 10, 0);
			$table->string('lila', 16);
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
		Schema::drop('layanan_ibu_hamil');
	}

}
