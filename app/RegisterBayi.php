<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_anak
 * @property int $id_pemberian_asi
 * @property int $id_imunisasi
 * @property int $id_user
 * @property string $catatan
 * @property string $timestamps
 * @property Anak $anak
 * @property PemberianImunisasi $pemberianImunisasi
 * @property PemberianAsi $pemberianAsi
 * @property User $user
 * @property PemberianAsi[] $pemberianAsis
 * @property PemberianImunisasi[] $pemberianImunisasis
 * @property PemberianVitum[] $pemberianVitAs
 * @property Penimbangan[] $penimbangans
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
    protected $fillable = ['id_anak', 'id_pemberian_asi', 'id_imunisasi', 'id_user', 'catatan', 'timestamps'];

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
    public function pemberianImunisasi()
    {
        return $this->belongsTo('App\PemberianImunisasi', 'id_imunisasi');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pemberianAsi()
    {
        return $this->belongsTo('App\PemberianAsi', 'id_pemberian_asi');
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
    public function pemberianVitAs()
    {
        return $this->hasMany('App\PemberianVitum', 'id_register');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function penimbangans()
    {
        return $this->hasMany('App\Penimbangan', 'id_rergister');
    }
}
