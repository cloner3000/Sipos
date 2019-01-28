<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_kabupaten
 * @property int $id_user
 * @property string $nama_kecamatan
 * @property string $created_at
 * @property string $updated_at
 * @property BaseKabupaten $baseKabupaten
 * @property User $user
 * @property BaseDesa[] $baseDesas
 */
class BaseKecamatan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'base_kecamatan';

    /**
     * @var array
     */
    protected $fillable = ['id_kabupaten', 'id_user', 'nama_kecamatan', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kabupaten()
    {
        return $this->belongsTo('App\BaseKabupaten', 'id_kabupaten');
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
        return $this->hasMany('App\BaseDesa', 'id_kecamatan');
    }
}
