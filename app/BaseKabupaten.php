<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_user
 * @property string $nama_kabupaten
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property BaseKecamatan[] $baseKecamatans
 */
class BaseKabupaten extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'base_kabupaten';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'nama_kabupaten', 'created_at', 'updated_at'];

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
    public function kecamatans()
    {
        return $this->hasMany('App\BaseKecamatan', 'id_kabupaten');
    }
}
