<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_register
 * @property string $e0
 * @property string $e1
 * @property string $e2
 * @property string $e3
 * @property string $e4
 * @property string $e5
 * @property string $e6
 * @property string $e7_asi
 * @property RegisterBayi $registerBayi
 */
class PemberianAsi extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pemberian_asi';
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['id_register', 'e0', 'e1', 'e2', 'e3', 'e4', 'e5', 'e6', 'e7_asi'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registerBayi()
    {
        return $this->belongsTo('App\RegisterBayi', 'id_register');
    }
}
