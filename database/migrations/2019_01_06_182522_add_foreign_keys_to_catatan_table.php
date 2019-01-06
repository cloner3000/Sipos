<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCatatanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('catatan', function(Blueprint $table)
		{
			$table->foreign('id_anak', 'catatan_ibfk_1')->references('id')->on('anak')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('catatan', function(Blueprint $table)
		{
			$table->dropForeign('catatan_ibfk_1');
		});
	}

}
