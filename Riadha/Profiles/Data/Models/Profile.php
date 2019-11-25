<?php

/**
 * Track an athlete profile
 *
 * @package Riadha\Profiles
 */

namespace Riadha\Profiles\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'profiles';
    
    protected $fillable = [
        'first_name', 'middle_name', 'last_name',
    ];

    public function getAll()
    {
        return static::all();
    }


    public function findProfile($id)
    {
        return static::find($id);
    }


    public function deleteProfile($id)
    {
        return static::find($id)->delete();
    }
}
