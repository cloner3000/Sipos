<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPuskesmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('puskesmas', function(Blueprint $table)
		{
			$table->foreign('id_kecamatan', 'puskesmas_ibfk_1')->references('id_kecamatan')->on('kecamatan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('puskesmas', function(Blueprint $table)
		{
			$table->dropForeign('puskesmas_ibfk_1');
		});
	}

}
