<?php

/**
 * The primary driver for the application.
 *
 * All reporting data will be derived from what we have here.
 *
 * A participant participates in a specialty during an event. e.g. run 100m during the olympics.
 *
 * 100m == specialty
 * Olympics == event
 *
 * It is possible for a single athlete to be a multiple participant in a single event.
 *
 * @todo set up model relationships
 */

namespace Riadha\Events\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model {
    protected $table = 'participants';
}
