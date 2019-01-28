<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $bulan
 * @property string $nama_bulan
 * @property RegisterBayi[] $registerBayis
 */
class Bulan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bulan';

    /**
     * @var array
     */
    protected $fillable = ['bulan', 'nama_bulan'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registerBayis()
    {
        return $this->hasMany('App\RegisterBayi', 'id_bulan');
    }
}
