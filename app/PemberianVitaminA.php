<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_register
 * @property string $tanggal_pemberian
 * @property RegisterBayi $registerBayi
 */
class PemberianVitaminA extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pemberian_vit_a';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['id_register', 'tanggal_pemberian'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registerBayi()
    {
        return $this->belongsTo('App\RegisterBayi', 'id_register');
    }
}
