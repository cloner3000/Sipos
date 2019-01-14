<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrtuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ortu', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nama', 32);
			$table->string('nik', 16);
			$table->string('jenis_kelamin', 16);
			$table->string('tempat_lahir', 32);
			$table->date('tanggal_lahir');
			$table->integer('id_agama')->index('agama');
			$table->string('pendidikan_terakhir', 32);
			$table->string('pekerjaan', 32)->nullable();
			$table->boolean('status')->default(1);
			$table->integer('id_pasangan')->nullable()->index('id_pasangan');
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
		Schema::drop('ortu');
	}

}
