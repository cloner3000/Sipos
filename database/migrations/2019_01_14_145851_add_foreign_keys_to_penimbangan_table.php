<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPenimbanganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('penimbangan', function(Blueprint $table)
		{
			$table->foreign('id_rergister', 'penimbangan_ibfk_1')->references('id')->on('register_bayi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('penimbangan', function(Blueprint $table)
		{
			$table->dropForeign('penimbangan_ibfk_1');
		});
	}

}
