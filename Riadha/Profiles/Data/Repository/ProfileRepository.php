<?php
/**
 * Eloquent operations abstraction for profile management.
 *
 * @todo create abstract class to handle repeated functionality in repos
 */

namespace Riadha\Profiles\Data\Repository;

use Riadha\Profiles\Data\Models\Profile;

class ProfileRepository{
    /**
     * Create a new profile
     *
     * @param array $payload
     *
     * @return Profile
     */
    public function create(array $payload){
        $profile = Profile::create($payload);

        return $profile;
    }
}
