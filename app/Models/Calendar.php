<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calendar
 *
 * @property $id
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calendar extends Model
{
    
    static $rules = [
		'date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'id_calendars', 'id');
    }
    

}
