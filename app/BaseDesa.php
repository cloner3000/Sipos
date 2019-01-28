<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_kecamatan
 * @property int $id_user
 * @property string $nama_desa
 * @property string $created_at
 * @property string $updated_at
 * @property BaseKecamatan $baseKecamatan
 * @property User $user
 * @property BasePosyandu[] $basePosyandus
 * @property Pasangan[] $pasangans
 */
class BaseDesa extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'base_desa';

    /**
     * @var array
     */
    protected $fillable = ['id_kecamatan', 'id_user', 'nama_desa', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kecamatan()
    {
        return $this->belongsTo('App\BaseKecamatan', 'id_kecamatan');
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
    public function posyandus()
    {
        return $this->hasMany('App\BasePosyandu', 'id_desa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pasangans()
    {
        return $this->hasMany('App\Pasangan', 'id_desa');
    }
}
