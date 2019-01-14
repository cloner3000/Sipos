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
			$table->integer('id', true);
			$table->integer('id_pasangan')->index('id_pasangan');
			$table->string('nama_anak', 32);
			$table->string('tempat_lahir', 32);
			$table->date('tanggal_lahir');
			$table->string('jenis_kelamin', 16);
			$table->float('berat_bayi_lahir', 10, 0);
			$table->integer('id_agama')->index('id_agama');
			$table->boolean('status');
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
		Schema::drop('anak');
	}

}
