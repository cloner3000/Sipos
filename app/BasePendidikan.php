<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $pendidikan
 * @property string $nama_pendidikan
 * @property Ortu[] $ortus
 */
class BasePendidikan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'base_pendidikan';

    /**
     * @var array
     */
    protected $fillable = ['pendidikan', 'nama_pendidikan'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ortus()
    {
        return $this->hasMany('App\Ortu', 'id_pendidikan_terakhir');
    }
}
