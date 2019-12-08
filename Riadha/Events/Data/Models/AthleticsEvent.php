<?php

/**
 * An event is a specialty that athletes can participate in.
 *
 * Information about the levels e.g. heat,semi-final,etc are carried here.
 */

namespace Riadha\Events\Data\Models;

use Illuminate\Database\Eloquent\Model;

class AthleticsEvent extends Model {
    protected $table = 'athletic_events';

    protected $fillable = [
        'round',
        'start_time',
        'tournament_id',
        'specialty_id'
    ];

    /**
     * Create a relationship to the tournament
     */
    public function tournament () {
        return $this->belongsTo('Riadha\Events\Data\Models\Tournament');
    }

    /**
     * Get the participants in the event
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function participants () {
        return $this->hasMany('Riadha\Events\Data\Models\Participant', 'event_id');
    }
}
