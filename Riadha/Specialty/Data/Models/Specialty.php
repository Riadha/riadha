<?php

namespace Riadha\Specialty\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model{
    protected $table = 'specialities';

    /**
     * Fields that can be filled whenever a new specialty is created.
     *
     * FIELDS
     * --------------
     * name: Mutable string name for the event e.g 3000m Steeplechase
     * machine_name: Immutable string used to reference a specialty e.g. 3000m_steeplechase
     * arena: Indicates whether the event is indoor or outdoor
     * type: Indicates whether the specialty is a track or a field event
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'machine_name',
        'arena',
        'type'
    ];
}
