<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_desa
 * @property int $id_kecamatan
 * @property string $no_desa
 * @property string $nama_desa
 * @property int $id_ku
 * @property string $timestamp
 * @property string $no_puskesmas
 * @property Kecamatan $kecamatan
 * @property Ibu[] $ibus
 * @property Petuga[] $petugas
 * @property Posyandu[] $posyandus
 */
class Desa extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'desa';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_desa';

    /**
     * @var array
     */
    protected $fillable = ['id_kecamatan', 'no_desa', 'nama_desa', 'id_ku', 'timestamp', 'no_puskesmas'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan', 'id_kecamatan', 'id_kecamatan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ibus()
    {
        return $this->hasMany('App\Ibu', 'id_desa', 'id_desa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function petugas()
    {
        return $this->hasMany('App\Petuga', 'id_desa', 'id_desa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posyandus()
    {
        return $this->hasMany('App\Posyandu', 'id_desa', 'id_desa');
    }
}
