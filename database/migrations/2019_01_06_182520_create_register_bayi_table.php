<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegisterBayiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('register_bayi', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_anak')->index('id_anak');
			$table->integer('id_pemberian_asi')->index('id_pemberian_asi');
			$table->integer('id_imunisasi')->index('id_imunisasi');
			$table->string('catatan', 64)->nullable();
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
		Schema::drop('register_bayi');
	}

}
