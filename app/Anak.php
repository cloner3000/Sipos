<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_anak
 * @property int $id_ibu
 * @property string $no_anak
 * @property int $anak_ke
 * @property string $nama
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property string $tanggal_meninggal
 * @property string $penyebab_meninggal
 * @property string $penolong_persalinan
 * @property int $berat_bayi_lahir
 * @property int $id_ku
 * @property string $timestamps
 * @property Ibu $ibu
 * @property LayananAnak[] $layananAnaks
 */
class Anak extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'anak';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_anak';

    /**
     * @var array
     */
    protected $fillable = ['id_ibu', 'no_anak', 'anak_ke', 'nama', 'tanggal_lahir', 'jenis_kelamin', 'tanggal_meninggal', 'penyebab_meninggal', 'penolong_persalinan', 'berat_bayi_lahir', 'id_ku', 'timestamps'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ibu()
    {
        return $this->belongsTo('App\Ibu', 'id_ibu', 'id_ibu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function layananAnaks()
    {
        return $this->hasMany('App\LayananAnak', 'id_anak', 'id_anak');
    }
}
