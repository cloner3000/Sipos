<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_register
 * @property int $id_imunisasi
 * @property int $nomor_imunisasi
 * @property string $tanggal_pemberian
 * @property RegisterBayi $registerBayi
 * @property BaseImunisasi $baseImunisasi
 */
class PemberianImunisasi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pemberian_imunisasi';

    /**
     * @var array
     */
    protected $fillable = ['id_register', 'id_imunisasi', 'nomor_imunisasi', 'tanggal_pemberian'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registerBayi()
    {
        return $this->belongsTo('App\RegisterBayi', 'id_register');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function imunisasi()
    {
        return $this->belongsTo('App\BaseImunisasi', 'id_imunisasi');
    }
}
