<?php

namespace Riadha\Events\Data\Models;

use Illuminate\Database\Eloquent\Model;

class AthleticsEvent extends Model {
    protected $table = 'events';

    protected $fillable = [
        'name',
        'year',
    ];
}
