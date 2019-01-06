<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePemberianImunisasiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pemberian_imunisasi', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_register')->index('id_register');
			$table->date('hb0')->nullable();
			$table->date('bcg')->nullable();
			$table->date('dpt_hb_1')->nullable();
			$table->date('dpt_hb_2')->nullable();
			$table->date('dpt_hb_3')->nullable();
			$table->date('polio_1')->nullable();
			$table->date('polio_2')->nullable();
			$table->date('polio_3')->nullable();
			$table->date('polio_4')->nullable();
			$table->date('polio_5')->nullable();
			$table->date('campak_011')->nullable();
			$table->date('dpt_hb_hib_1223')->nullable();
			$table->date('campak_1223')->nullable();
			$table->date('dpt_hb_hib_2435')->nullable();
			$table->date('campak_2435')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pemberian_imunisasi');
	}

}
