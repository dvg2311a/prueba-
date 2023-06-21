<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suscription
 *
 * @property $id
 * @property $dates
 * @property $price
 * @property $type
 * @property $id_pays
 * @property $id_activities
 * @property $id_users
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity $activity
 * @property Pay $pay
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Suscription extends Model
{
    
    static $rules = [
		'dates' => 'required',
		'price' => 'required',
		'type' => 'required',
		'id_pays' => 'required',
		'id_activities' => 'required',
		'id_users' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dates','price','type','id_pays','id_activities','id_users'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function activity()
    {
        return $this->hasOne('App\Models\Activity', 'id', 'id_activities');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pay()
    {
        return $this->hasOne('App\Models\Pay', 'id', 'id_pays');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_users');
    }
    

}
