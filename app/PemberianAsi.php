<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_register
 * @property int $id_asi
 * @property string $tanggal
 * @property RegisterBayi $registerBayi
 * @property BaseAsi $baseAsi
 */
class PemberianAsi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pemberian_asi';

    /**
     * @var array
     */
    protected $fillable = ['id_register', 'id_asi', 'tanggal'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registerBayi()
    {
        return $this->belongsTo('App\RegisterBayi', 'id_register');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function asi()
    {
        return $this->belongsTo('App\BaseAsi', 'id_asi');
    }
}
