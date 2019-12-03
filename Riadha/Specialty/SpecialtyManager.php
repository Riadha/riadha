<?php

namespace Riadha\Specialty;

use Riadha\Specialty\Data\Models\Specialty;

class SpecialtyManager {
    /**
     * Create a new specialty
     *
     * @param array $payload
     * @return Specialty
     */
    public function create(array $payload) : Specialty {
        return Specialty::create($payload);
    }
}
