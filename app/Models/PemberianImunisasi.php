<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_register
 * @property string $hb0
 * @property string $bcg
 * @property string $dpt_hb_1
 * @property string $dpt_hb_2
 * @property string $dpt_hb_3
 * @property string $polio_1
 * @property string $polio_2
 * @property string $polio_3
 * @property string $polio_4
 * @property string $polio_5
 * @property string $campak_011
 * @property string $dpt_hb_hib_1223
 * @property string $campak_1223
 * @property string $dpt_hb_hib_2435
 * @property string $campak_2435
 * @property RegisterBayi $registerBayi
 */
class PemberianImunisasi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pemberian_imunisasi';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['id_register', 'hb0', 'bcg', 'dpt_hb_1', 'dpt_hb_2', 'dpt_hb_3', 'polio_1', 'polio_2', 'polio_3', 'polio_4', 'polio_5', 'campak_011', 'dpt_hb_hib_1223', 'campak_1223', 'dpt_hb_hib_2435', 'campak_2435'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registerBayi()
    {
        return $this->belongsTo('App\RegisterBayi', 'id_register');
    }
}
