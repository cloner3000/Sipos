<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $tanggal_menikah
 * @property Anak[] $anaks
 * @property Ortu[] $ortus
 */
class Pasangan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pasangan';

    /**
     * @var array
     */
    protected $fillable = ['tanggal_menikah'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function anaks()
    {
        return $this->hasMany('App\Anak', 'id_pasangan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ortus()
    {
        return $this->hasMany('App\OrangTua', 'id_pasangan');
    }
}
