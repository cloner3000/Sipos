<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pasangan
 * @property int $id_agama
 * @property int $id_user
 * @property string $nama_anak
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $jenis_kelamin
 * @property float $berat_bayi_lahir
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property Pasangan $pasangan
 * @property User $user
 * @property Agama $agama
 * @property Catatan[] $catatans
 * @property RegisterBayi[] $registerBayis
 */
class Anak extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'anak';

    /**
     * @var array
     */
    protected $fillable = ['id_pasangan', 'id_agama', 'id_user', 'nama_anak', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'berat_bayi_lahir', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pasangan()
    {
        return $this->belongsTo('App\Pasangan', 'id_pasangan');
    }

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
    public function agama()
    {
        return $this->belongsTo('App\Agama', 'id_agama');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function catatans()
    {
        return $this->hasMany('App\Catatan', 'id_anak');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function registerBayis()
    {
        return $this->hasMany('App\RegisterBayi', 'id_anak');
    }
}
