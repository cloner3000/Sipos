<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_register
 * @property float $berat
 * @property string $status
 * @property string $tanggal
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

    /**
     * @var array
     */
    protected $fillable = ['id_register', 'berat', 'status', 'tanggal'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registerBayi()
    {
        return $this->belongsTo('App\RegisterBayi', 'id_register');
    }
}
