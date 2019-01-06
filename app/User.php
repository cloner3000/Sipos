<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property int $id_role
 * @property string $name
 * @property string $email
 * @property string $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Role $role
 */
class User extends Authenticatable
{

    use Notifiable;
    /**
     * @var array
     */
    protected $fillable = ['id_role', 'name', 'email', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at', 'token_key'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'id_role');
    }
}
