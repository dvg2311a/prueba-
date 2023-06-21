<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pay
 *
 * @property $id
 * @property $payment
 * @property $creditt_card_number
 * @property $dates
 * @property $created_at
 * @property $updated_at
 *
 * @property Suscription[] $suscriptions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pay extends Model
{
    
    static $rules = [
		'payment' => 'required',
		'creditt_card_number' => 'required',
		'dates' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['payment','creditt_card_number','dates'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suscriptions()
    {
        return $this->hasMany('App\Models\Suscription', 'id_pays', 'id');
    }
    

}
