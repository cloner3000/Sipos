<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAnakTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('anak', function(Blueprint $table)
		{
			$table->foreign('id_pasangan', 'anak_ibfk_1')->references('id')->on('pasangan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_user', 'anak_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('anak', function(Blueprint $table)
		{
			$table->dropForeign('anak_ibfk_1');
			$table->dropForeign('anak_ibfk_2');
		});
	}

}
