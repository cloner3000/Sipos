<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToIbuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ibu', function(Blueprint $table)
		{
			$table->foreign('id_desa', 'ibu_ibfk_1')->references('id_desa')->on('desa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_posyandu', 'ibu_ibfk_2')->references('id_posyandu')->on('posyandu')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ibu', function(Blueprint $table)
		{
			$table->dropForeign('ibu_ibfk_1');
			$table->dropForeign('ibu_ibfk_2');
		});
	}

}
