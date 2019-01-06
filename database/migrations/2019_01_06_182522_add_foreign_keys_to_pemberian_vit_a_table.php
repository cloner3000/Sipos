<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPemberianVitATable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pemberian_vit_a', function(Blueprint $table)
		{
			$table->foreign('id_register', 'pemberian_vit_a_ibfk_1')->references('id')->on('register_bayi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pemberian_vit_a', function(Blueprint $table)
		{
			$table->dropForeign('pemberian_vit_a_ibfk_1');
		});
	}

}
