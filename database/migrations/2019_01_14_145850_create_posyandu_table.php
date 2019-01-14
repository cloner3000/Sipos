<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePosyanduTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posyandu', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('no_posyandu', 32);
			$table->string('nama_posyandu', 32);
			$table->integer('id_desa')->index('id_desa');
			$table->integer('id_user')->unsigned()->index('id_user');
			$table->timestamp('timestamps')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('posyandu');
	}

}
