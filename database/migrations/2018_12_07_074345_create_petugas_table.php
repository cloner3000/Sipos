<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePetugasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('petugas', function(Blueprint $table)
		{
			$table->integer('id_petugas', true);
			$table->string('no_petugas', 32);
			$table->string('nama', 32);
			$table->string('alamat', 64);
			$table->integer('id_desa')->index('id_desa');
			$table->integer('no_kecamatan');
			$table->string('jabatan', 32);
			$table->date('tanggal_mulai_kerja');
			$table->string('status', 16);
			$table->string('pendidikan', 16);
			$table->string('no_telepon', 16);
			$table->string('jenis_kelamin', 16);
			$table->date('tanggal_lahir');
			$table->string('status_pegawai', 64);
			$table->integer('id_ku');
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
		Schema::drop('petugas');
	}

}
