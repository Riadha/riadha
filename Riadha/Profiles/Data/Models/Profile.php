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
        'first_name',
        'middle_name',
        'last_name',
        'country',
        'slug',
        'status'
    ];

    /**
     * Set the profile's country.
     *
     * @param  string  $value
     * @return void
     */
    public function setCountryAttribute($value)
    {
        $this->attributes['country'] = strtolower($value);
    }
}
