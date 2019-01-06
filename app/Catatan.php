<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_anak
 * @property boolean $meninggal
 * @property string $tanggal_meninggal
 * @property string $penyebab_meninggal
 * @property Anak $anak
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
    protected $fillable = ['id_anak', 'meninggal', 'tanggal_meninggal', 'penyebab_meninggal'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function anak()
    {
        return $this->belongsTo('App\Anak', 'id_anak');
    }
}
