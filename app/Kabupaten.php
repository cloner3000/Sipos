<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama_kabupaten
 * @property Kecamatan[] $kecamatans
 */
class Kabupaten extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kabupaten';

    /**
     * @var array
     */
    protected $fillable = ['nama_kabupaten'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kecamatans()
    {
        return $this->hasMany('App\Kecamatan', 'id_kabupaten');
    }
}
