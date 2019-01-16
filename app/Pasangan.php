<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $id_desa
 * @property int $id_user
 * @property string $tanggal_menikah
 * @property string $alamat
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 * @property Desa $desa
 * @property Anak[] $anaks
 * @property Ortu[] $ortus
 */
class Pasangan extends Model
{
    use SoftDeletes;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pasangan';

    /**
     * @var array
     */
    protected $fillable = ['id_desa', 'id_user', 'tanggal_menikah', 'alamat', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function desa()
    {
        return $this->belongsTo('App\Desa', 'id_desa');
    }

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
