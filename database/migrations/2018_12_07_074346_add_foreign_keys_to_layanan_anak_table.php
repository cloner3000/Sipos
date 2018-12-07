<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLayananAnakTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('layanan_anak', function(Blueprint $table)
		{
			$table->foreign('id_anak', 'layanan_anak_ibfk_1')->references('id_anak')->on('anak')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('layanan_anak', function(Blueprint $table)
		{
			$table->dropForeign('layanan_anak_ibfk_1');
		});
	}

}
