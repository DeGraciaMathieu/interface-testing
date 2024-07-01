<?php

namespace App\Adapters;

use App\Entities\User;
use App\Ports\UserRepository;

class UserRepositoryInSession implements UserRepository
{
    public function add(User $user): void
    {
        $_SESSION['users'][$user->id] = $user;
    }

    public function find(int $id): User
    {
        $user = $_SESSION['users'][$id] ?? null;

        if (is_null($user)) {
            throw new \Exception('User not found');
        }

        return $user;
    }
}