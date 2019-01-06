<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_kabupaten
 * @property int $id_user
 * @property string $nama_kecamatan
 * @property string $timestamps
 * @property Kabupaten $kabupaten
 * @property User $user
 * @property Desa[] $desas
 */
class Kecamatan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'kecamatan';

    /**
     * @var array
     */
    protected $fillable = ['id_kabupaten', 'id_user', 'nama_kecamatan', 'timestamps'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kabupaten()
    {
        return $this->belongsTo('App\Kabupaten', 'id_kabupaten');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function desas()
    {
        return $this->hasMany('App\Desa', 'id_kecamatan');
    }
}
