<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama_role
 * @property string $role
 * @property string $deskripsi
 * @property User[] $users
 */
class BaseRole extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'base_role';

    /**
     * @var array
     */
    protected $fillable = ['nama_role', 'role', 'deskripsi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'id_role');
    }
}
