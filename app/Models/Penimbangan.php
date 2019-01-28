<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_rergister
 * @property float $berat_penimbangan
 * @property string $tanggal_penimbangan
 * @property RegisterBayi $registerBayi
 */
class Penimbangan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'penimbangan';

    /**
     * @var array
     */
    protected $fillable = ['id_rergister', 'berat_penimbangan', 'tanggal_penimbangan'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registerBayi()
    {
        return $this->belongsTo('App\RegisterBayi', 'id_rergister');
    }
}
