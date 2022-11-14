<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Information;
use Illuminate\Auth\Access\HandlesAuthorization;

class InformationPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Information $information): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Information $information): bool
    {
    }

    public function delete(User $user, Information $information): bool
    {
    }

    public function restore(User $user, Information $information): bool
    {
    }

    public function forceDelete(User $user, Information $information): bool
    {
    }
}
