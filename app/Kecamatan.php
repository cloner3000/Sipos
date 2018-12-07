<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_kecamatan
 * @property string $no_kecamatan
 * @property string $nama_kecamatan
 * @property int $id_ku
 * @property string $timestamps
 * @property Desa[] $desas
 * @property Puskesma[] $puskesmas
 */
class Kecamatan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kecamatan';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_kecamatan';

    /**
     * @var array
     */
    protected $fillable = ['no_kecamatan', 'nama_kecamatan', 'id_ku', 'timestamps'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desas()
    {
        return $this->hasMany('App\Desa', 'id_kecamatan', 'id_kecamatan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function puskesmas()
    {
        return $this->hasMany('App\Puskesma', 'id_kecamatan', 'id_kecamatan');
    }
}
