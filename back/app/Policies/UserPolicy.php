<?php

namespace App\Policies;

use App\Models\User;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any user.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function view(User $user, User $user)
    {
        //
    }

    /**
     * Determine whether the user can create user.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function update(User $user, User $user)
    {
        //
    }

    /**
     * Determine whether the user can delete the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function delete(User $user, User $user)
    {
        //
    }

    /**
     * Determine whether the user can restore the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function restore(User $user, User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function forceDelete(User $user, User $user)
    {
        //
    }
}
