<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_puskesmas
 * @property int $id_kecamatan
 * @property string $no_puskesmas
 * @property string $nama_puskesmas
 * @property int $id_ku
 * @property string $timestamps
 * @property Kecamatan $kecamatan
 */
class Puskesmas extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_puskesmas';

    /**
     * @var array
     */
    protected $fillable = ['id_kecamatan', 'no_puskesmas', 'nama_puskesmas', 'id_ku', 'timestamps'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan', 'id_kecamatan', 'id_kecamatan');
    }
}
