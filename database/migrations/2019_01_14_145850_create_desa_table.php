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
			$table->integer('id', true);
			$table->string('nama_desa', 32);
			$table->integer('id_kecamatan')->index('id_kecamatan');
			$table->integer('id_user')->unsigned()->index('id_user');
			$table->timestamps();
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
