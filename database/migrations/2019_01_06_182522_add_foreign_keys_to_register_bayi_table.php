<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRegisterBayiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('register_bayi', function(Blueprint $table)
		{
			$table->foreign('id_anak', 'register_bayi_ibfk_1')->references('id')->on('anak')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_imunisasi', 'register_bayi_ibfk_2')->references('id')->on('pemberian_imunisasi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_pemberian_asi', 'register_bayi_ibfk_3')->references('id')->on('pemberian_asi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_user', 'register_bayi_ibfk_4')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('register_bayi', function(Blueprint $table)
		{
			$table->dropForeign('register_bayi_ibfk_1');
			$table->dropForeign('register_bayi_ibfk_2');
			$table->dropForeign('register_bayi_ibfk_3');
			$table->dropForeign('register_bayi_ibfk_4');
		});
	}

}
