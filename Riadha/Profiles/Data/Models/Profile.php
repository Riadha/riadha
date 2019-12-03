<?php

/**
 * Track an athlete profile
 *
 * @package Riadha\Profiles
 */

namespace Riadha\Profiles\Data\Models;

use Czim\Paperclip\Contracts\AttachableInterface;
use Czim\Paperclip\Model\PaperclipTrait;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model implements AttachableInterface
{
    use PaperclipTrait;

    public function __construct(array $attributes = [])
    {
        $this->hasAttachedFile('profilephoto', [
            'variants' => [
                'display' => '800x800',
                'medium' => '400x400',
                'thumb' => '100x100',
            ],
            'attributes' => [
                'variants' => true,
            ],
        ]);

        parent::__construct($attributes);
    }

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

    /**
     * Combine all name fields to yield one name
     */
    public function getNameAttribute($value) {
        return $this->first_name . ' ' . $this->middle_name . ' ' . $this->last_name;
    }
}
