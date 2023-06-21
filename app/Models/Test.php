<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Test
 *
 * @property $id
 * @property $task1
 * @property $task3
 * @property $task4
 * @property $task5
 * @property $task6
 * @property $task7
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Test extends Model
{
    
    static $rules = [
		'task1' => 'required',
		'task3' => 'required',
		'task4' => 'required',
		'task5' => 'required',
		'task6' => 'required',
		'task7' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['task1','task3','task4','task5','task6','task7'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'id_tests', 'id');
    }
    

}
