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
			$table->integer('id', true);
			$table->integer('id_kabupaten')->index('id_kabupaten');
			$table->string('nama_kecamatan', 32);
			$table->integer('id_user')->unsigned()->index('id_user');
			$table->timestamp('timestamps')->default(DB::raw('CURRENT_TIMESTAMP'));
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
