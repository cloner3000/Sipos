<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $asi
 * @property string $nama_asi
 * @property PemberianAsi[] $pemberianAsis
 */
class BaseAsi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'base_asi';

    /**
     * @var array
     */
    protected $fillable = ['asi', 'nama_asi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemberianAsis()
    {
        return $this->hasMany('App\PemberianAsi', 'id_asi');
    }
}
