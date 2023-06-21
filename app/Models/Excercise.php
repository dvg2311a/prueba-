<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Excercise
 *
 * @property $id
 * @property $excercises
 * @property $type
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Excercise extends Model
{
    
    static $rules = [
		'excercises' => 'required',
		'type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['excercises','type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'id_excercises', 'id');
    }
    

}
