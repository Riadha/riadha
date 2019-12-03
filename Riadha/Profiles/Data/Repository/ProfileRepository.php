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
}
