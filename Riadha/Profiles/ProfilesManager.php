<?php

/**
 * Provides profile management functionality for the application.
 *
 * This is an abstraction for all functionality involving profiles.
 */

namespace Riadha\Profiles;

use Riadha\Profiles\Data\Models\Profile;

class ProfilesManager{

    public $profile;

    function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function getAll()
    {
        return $this->profile->getAll();
    }


    public function find($id)
    {
        return $this->profile->findProfile($id);
    }


    public function delete($id)
    {
        return $this->profile->deleteProfile($id);
    }
}
