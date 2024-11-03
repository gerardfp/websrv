<?php

namespace App\Policies;

use App\Models\Fichero;
use App\Models\User;

class FicheroPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function upload(User $user): bool
    {
        return true;
    }

    public function download(User $user, Fichero $fichero): bool
    {
        return $fichero->user->id === $user->id;
    }
}
