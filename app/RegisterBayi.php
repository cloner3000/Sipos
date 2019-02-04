<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_anak
 * @property int $id_user
 * @property int $umur
 * @property string $catatan
 * @property string $created_at
 * @property string $updated_at
 * @property Anak $anak
 * @property User $user
 * @property PemberianAsi[] $pemberianAsis
 * @property PemberianImunisasi[] $pemberianImunisasis
 * @property PemberianNtob[] $pemberianNtobs
 * @property PemberianVitum[] $pemberianVitAs
 */
class RegisterBayi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'register_bayi';

    /**
     * @var array
     */
    protected $fillable = ['id_anak', 'id_user', 'umur', 'catatan', 'created_at', 'updated_at', 'active'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function anak()
    {
        return $this->belongsTo('App\Anak', 'id_anak');
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
    public function pemberianAsis()
    {
        return $this->hasMany('App\PemberianAsi', 'id_register');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemberianImunisasis()
    {
        return $this->hasMany('App\PemberianImunisasi', 'id_register');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemberianNtobs()
    {
        return $this->hasMany('App\PemberianNtob', 'id_register');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemberianVitAs()
    {
        return $this->hasMany('App\PemberianVitaminA', 'id_register');
    }
}
