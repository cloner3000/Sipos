<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDesaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('desa', function(Blueprint $table)
		{
			$table->foreign('id_kecamatan', 'desa_ibfk_1')->references('id')->on('kecamatan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_user', 'desa_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('desa', function(Blueprint $table)
		{
			$table->dropForeign('desa_ibfk_1');
			$table->dropForeign('desa_ibfk_2');
		});
	}

}
