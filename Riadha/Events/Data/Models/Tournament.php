<?php

/**
 * A tournament is an event happening at a given venue.
 *
 * The most important fields are;
 *  - name
 *  - venue
 *
 * @todo indicate the adjudicating bodies e.g. IAAF
 */

namespace Riadha\Events\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model {
    protected $table = 'tournaments';

    /**
     * Get the events in this tournament
     */
    public function events() {
        return $this->hasMany('Riadha\Events\Data\Models\AthleticsEvent');
    }
}