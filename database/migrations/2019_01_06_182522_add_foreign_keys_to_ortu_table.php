<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOrtuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ortu', function(Blueprint $table)
		{
			$table->foreign('id_pasangan', 'ortu_ibfk_1')->references('id')->on('pasangan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_user', 'ortu_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ortu', function(Blueprint $table)
		{
			$table->dropForeign('ortu_ibfk_1');
			$table->dropForeign('ortu_ibfk_2');
		});
	}

}
