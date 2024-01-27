<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function deleteUserAndTasks(User $user, string $name): bool
    {
        if (!$this->validatedEnteredUsername($user, $name)) {
            return false;
        }

        $user->tasks()->delete();
        $user->delete();

        return true;
    }

    public function validatedEnteredUsername(User $user, string $name): bool
    {
        return $user->name === $name;
    }
}
