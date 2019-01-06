<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCatatanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('catatan', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_anak')->index('catatan_ibfk_1');
			$table->boolean('meninggal')->nullable();
			$table->date('tanggal_meninggal')->nullable();
			$table->string('penyebab_meninggal', 64)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('catatan');
	}

}
