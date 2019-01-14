<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $agama
 * @property string $nama_agama
 * @property Anak[] $anaks
 * @property Ortu[] $ortus
 */
class Agama extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'agama';

    /**
     * @var array
     */
    protected $fillable = ['agama', 'nama_agama'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function anaks()
    {
        return $this->hasMany('App\Anak', 'id_agama');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ortus()
    {
        return $this->hasMany('App\Ortu', 'id_agama');
    }
}
