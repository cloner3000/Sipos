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
			$table->foreign('id_ibu', 'anak_ibfk_1')->references('id_ibu')->on('ibu')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
		});
	}

}
