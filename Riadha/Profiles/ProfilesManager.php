<?php

/**
 * Provides profile management functionality for the application.
 *
 * This is an abstraction for all functionality involving profiles.
 */

namespace Riadha\Profiles;

use Riadha\Profiles\Data\Models\Profile;
use Riadha\Profiles\Data\Repository\ProfileRepository;

class ProfilesManager{
    /**
     * Database repository. Abstract DB functionality.
     *
     * @var
     */
    protected $repo;

    function __construct()
    {
        $this->repo = new ProfileRepository(Profile::class);
    }

    /**
     * Create a new profile
     *
     * @param array $payload
     *
     * @return Data\Models\Profile
     */
    public function create(array $payload){
        $profile = $this->repo->create($payload);

        $this->generateSlug($profile);

        return $profile;
    }

    /**
     * Get a list of profiles.
     *
     * @todo Add filter capability
     */
    public function index() {
        return $this->repo->index();
    }

    /**
     * Get a profile given the slug
     */
    public function findBySlug($slug) {
        return $this->repo->findBySlug($slug);
    }

    /**
     * Generate a url slug for an athlete
     */
    private function generateSlug(Profile $profile){
        $hyphenated_name = strtolower($profile->first_name . '-' . $profile->middle_name . '-' . $profile->last_name);

        $slug = '/athlete/' . $profile->country .'/' . $profile->id . '/' . $hyphenated_name;

        $profile->slug = $slug;
        $profile->save();
    }
}
