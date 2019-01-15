<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPemberianAsiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pemberian_asi', function(Blueprint $table)
		{
			$table->foreign('id_register', 'pemberian_asi_ibfk_1')->references('id')->on('register_bayi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pemberian_asi', function(Blueprint $table)
		{
			$table->dropForeign('pemberian_asi_ibfk_1');
		});
	}

}