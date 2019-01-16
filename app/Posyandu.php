<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_desa
 * @property int $id_user
 * @property string $no_posyandu
 * @property string $nama_posyandu
 * @property string $timestamps
 * @property Desa $desa
 * @property User $user
 * @property User[] $users
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
     * @var array
     */
    protected $fillable = ['id_desa', 'id_user', 'no_posyandu', 'nama_posyandu', 'alamat', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function desa()
    {
        return $this->belongsTo('App\Desa', 'id_desa');
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
    public function users()
    {
        return $this->hasMany('App\User', 'id_posyandu');
    }
}
