<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_ibu
 * @property int $id_desa
 * @property int $id_posyandu
 * @property string $nama
 * @property string $no
 * @property string $alamat
 * @property string $nama_suami
 * @property string $tanggal_lahir
 * @property string $no_telepon
 * @property string $kelompok_dasawisma
 * @property string $tanggal_meninggal
 * @property string $penyebab_meninggal
 * @property string $tahapan_ks
 * @property string $keadaan_ibu
 * @property int $id_ku
 * @property string $timestamp
 * @property Desa $desa
 * @property Posyandu $posyandu
 * @property Anak[] $anaks
 * @property LayananIbuHamil[] $layananIbuHamils
 * @property LayananIbuWuspus[] $layananIbuWuspuses
 */
class Ibu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ibu';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_ibu';

    /**
     * @var array
     */
    protected $fillable = ['id_desa', 'id_posyandu', 'nama', 'no', 'alamat', 'nama_suami', 'tanggal_lahir', 'no_telepon', 'kelompok_dasawisma', 'tanggal_meninggal', 'penyebab_meninggal', 'tahapan_ks', 'keadaan_ibu', 'id_ku', 'timestamp'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function desa()
    {
        return $this->belongsTo('App\Desa', 'id_desa', 'id_desa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function posyandu()
    {
        return $this->belongsTo('App\Posyandu', 'id_posyandu', 'id_posyandu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function anaks()
    {
        return $this->hasMany('App\Anak', 'id_ibu', 'id_ibu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function layananIbuHamils()
    {
        return $this->hasMany('App\LayananIbuHamil', 'id_ibu', 'id_ibu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function layananIbuWuspuses()
    {
        return $this->hasMany('App\LayananIbuWuspus', 'id_ibu', 'id_ibu');
    }
}
