<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mediafile
 *
 * @property $id
 * @property $archive
 * @property $name
 * @property $genre
 * @property $type
 * @property $created_at
 * @property $updated_at
 *
 * @property Activity[] $activities
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mediafile extends Model
{
    
    static $rules = [
		'archive' => 'required',
		'name' => 'required',
		'genre' => 'required',
		'type' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['archive','name','genre','type'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities()
    {
        return $this->hasMany('App\Models\Activity', 'id_medias', 'id');
    }
    

}
