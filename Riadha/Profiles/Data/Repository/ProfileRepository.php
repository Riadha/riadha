<?php
/**
 * Eloquent operations abstraction for profile management.
 *
 */

namespace Riadha\Profiles\Data\Repository;

use Riadha\Core\Repository\AbstractRepository;
use Riadha\Profiles\Data\Models\Profile;

class ProfileRepository extends AbstractRepository {
    public function __construct($model)
    {
        parent::__construct($model);
    }

    /**
     * Get a profile given a slug
     * @param $slug
     *
     * @return Profile
     */
    public function findBySlug(string $slug) {
        $profile = Profile::where('slug', $slug)
            ->first();

        return $profile;
    }
}
