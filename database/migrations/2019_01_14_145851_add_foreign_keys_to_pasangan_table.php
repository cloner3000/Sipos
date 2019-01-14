<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPasanganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pasangan', function(Blueprint $table)
		{
			$table->foreign('id_user', 'pasangan_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_desa', 'pasangan_ibfk_2')->references('id')->on('desa')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pasangan', function(Blueprint $table)
		{
			$table->dropForeign('pasangan_ibfk_1');
			$table->dropForeign('pasangan_ibfk_2');
		});
	}

}
