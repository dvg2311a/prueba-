<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activity
 *
 * @property $id
 * @property $dates
 * @property $id_tests
 * @property $id_medias
 * @property $id_calendars
 * @property $id_excercises
 * @property $created_at
 * @property $updated_at
 *
 * @property Calendar $calendar
 * @property Excercise $excercise
 * @property Mediafile $mediafile
 * @property Suscription[] $suscriptions
 * @property Test $test
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Activity extends Model
{
    
    static $rules = [
		'dates' => 'required',
		'id_tests' => 'required',
		'id_medias' => 'required',
		'id_calendars' => 'required',
		'id_excercises' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dates','id_tests','id_medias','id_calendars','id_excercises'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function calendar()
    {
        return $this->hasOne('App\Models\Calendar', 'id', 'id_calendars');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function excercise()
    {
        return $this->hasOne('App\Models\Excercise', 'id', 'id_excercises');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mediafile()
    {
        return $this->hasOne('App\Models\Mediafile', 'id', 'id_medias');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suscriptions()
    {
        return $this->hasMany('App\Models\Suscription', 'id_activities', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function test()
    {
        return $this->hasOne('App\Models\Test', 'id', 'id_tests');
    }
    

}
