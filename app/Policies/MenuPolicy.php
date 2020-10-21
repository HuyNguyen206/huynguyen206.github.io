<?php

namespace App\Policies;

use App\Policy;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MenuPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Policy  $policy
     * @return mixed
     */
    public function view(User $user)
    {
        //
        return  $user->checkPermission(config('permission.access.list-menu'));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return  $user->checkPermission(config('permission.access.add-menu'));
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Policy  $policy
     * @return mixed
     */
    public function update(User $user)
    {
        //
        return  $user->checkPermission(config('permission.access.edit-menu'));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Policy  $policy
     * @return mixed
     */
    public function delete(User $user)
    {
        //
        return  $user->checkPermission(config('permission.access.delete-menu'));
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Policy  $policy
     * @return mixed
     */
    public function restore(User $user, Policy $policy)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Policy  $policy
     * @return mixed
     */
    public function forceDelete(User $user, Policy $policy)
    {
        //
    }
}
