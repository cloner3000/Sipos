<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPosyanduTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posyandu', function(Blueprint $table)
		{
			$table->foreign('id_desa', 'posyandu_ibfk_1')->references('id_desa')->on('desa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posyandu', function(Blueprint $table)
		{
			$table->dropForeign('posyandu_ibfk_1');
		});
	}

}
