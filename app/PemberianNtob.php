<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_register_bayi
 * @property int $id
 * @property int $berat
 * @property int $status
 * @property int $tanggal
 * @property RegisterBayi $registerBayi
 */
class PemberianNtob extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pemberian_ntob';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['id_register', 'id', 'berat', 'status', 'tanggal'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registerBayi()
    {
        return $this->belongsTo('App\RegisterBayi', 'id_register');
    }
}
