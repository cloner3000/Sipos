<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLayananIbuWuspusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('layanan_ibu_wuspus', function(Blueprint $table)
		{
			$table->foreign('id_ibu', 'layanan_ibu_wuspus_ibfk_1')->references('id_ibu')->on('ibu')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('layanan_ibu_wuspus', function(Blueprint $table)
		{
			$table->dropForeign('layanan_ibu_wuspus_ibfk_1');
		});
	}

}
