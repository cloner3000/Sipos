<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_petugas
 * @property int $id_desa
 * @property string $no_petugas
 * @property string $nama
 * @property string $alamat
 * @property int $no_kecamatan
 * @property string $jabatan
 * @property string $tanggal_mulai_kerja
 * @property string $status
 * @property string $pendidikan
 * @property string $no_telepon
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $status_pegawai
 * @property int $id_ku
 * @property string $timestamps
 * @property Desa $desa
 */
class Petugas extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_petugas';

    /**
     * @var array
     */
    protected $fillable = ['id_desa', 'no_petugas', 'nama', 'alamat', 'no_kecamatan', 'jabatan', 'tanggal_mulai_kerja', 'status', 'pendidikan', 'no_telepon', 'jenis_kelamin', 'tanggal_lahir', 'status_pegawai', 'id_ku', 'timestamps'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function desa()
    {
        return $this->belongsTo('App\Desa', 'id_desa', 'id_desa');
    }
}
