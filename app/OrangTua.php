<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pasangan
 * @property int $id_user
 * @property string $nama
 * @property string $nik
 * @property string $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $agama
 * @property string $pendidikan_terakhir
 * @property string $pekerjaan
 * @property boolean $status
 * @property string $timestamps
 * @property Pasangan $pasangan
 * @property User $user
 */
class OrangTua extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ortu';

    /**
     * @var array
     */
    protected $fillable = ['id_pasangan', 'id_user', 'nama', 'nik', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'agama', 'pendidikan_terakhir', 'pekerjaan', 'status', 'timestamps'];

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
}
