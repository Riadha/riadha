<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if a user can create a new profile
     *
     * @param User $user
     *
     * @return boolean
     */
    public function create(User $user){
        return $user->admin;
    }
}
