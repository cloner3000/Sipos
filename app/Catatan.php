<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $id_anak
 * @property int $id_user
 * @property boolean $meninggal
 * @property string $tanggal_meninggal
 * @property string $penyebab_meninggal
 * @property string $created_at
 * @property string $updated_at
 * @property Anak $anak
 * @property User $user
 */
class Catatan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'catatan';

    /**
     * @var array
     */
    protected $fillable = ['id_anak', 'id_user', 'meninggal', 'tanggal_meninggal', 'penyebab_meninggal', 'created_at', 'updated_at'];
    protected $dates = ['deleted_at'];

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
}
