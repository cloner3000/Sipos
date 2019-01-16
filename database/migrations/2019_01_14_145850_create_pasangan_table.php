<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePasanganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pasangan', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->date('tanggal_menikah');
			$table->string('alamat', 64);
			$table->integer('id_desa')->index('id_desa');
			$table->integer('id_user')->unsigned()->index('id_user');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pasangan');
	}

}
