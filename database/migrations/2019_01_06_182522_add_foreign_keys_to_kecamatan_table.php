<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToKecamatanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('kecamatan', function(Blueprint $table)
		{
			$table->foreign('id_kabupaten', 'kecamatan_ibfk_1')->references('id')->on('kabupaten')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_user', 'kecamatan_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('kecamatan', function(Blueprint $table)
		{
			$table->dropForeign('kecamatan_ibfk_1');
			$table->dropForeign('kecamatan_ibfk_2');
		});
	}

}
