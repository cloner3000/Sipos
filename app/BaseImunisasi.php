<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $imunisasi
 * @property string $nama_imunisasi
 * @property PemberianImunisasi[] $pemberianImunisasis
 */
class BaseImunisasi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'base_imunisasi';

    /**
     * @var array
     */
    protected $fillable = ['imunisasi', 'nama_imunisasi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemberianImunisasis()
    {
        return $this->hasMany('App\PemberianImunisasi', 'id_imunisasi');
    }
}
