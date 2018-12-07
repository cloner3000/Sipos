<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_posyandu
 * @property int $id_desa
 * @property string $no_posyandu
 * @property string $nama_posyandu
 * @property int $id_ku
 * @property string $timestamps
 * @property Desa $desa
 * @property Ibu[] $ibus
 */
class Posyandu extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'posyandu';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_posyandu';

    /**
     * @var array
     */
    protected $fillable = ['id_desa', 'no_posyandu', 'nama_posyandu', 'id_ku', 'timestamps'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function desa()
    {
        return $this->belongsTo('App\Desa', 'id_desa', 'id_desa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ibus()
    {
        return $this->hasMany('App\Ibu', 'id_posyandu', 'id_posyandu');
    }
}
