<?php

namespace App\Adapters;

use App\Entities\User;
use App\Ports\UserRepository;

class UserRepositoryInMemory implements UserRepository
{
    private $users = [];

    public function add(User $user): void
    {
        $this->users[$user->id] = $user;
    }

    public function find(int $id): User
    {
        $user = $this->users[$id] ?? null;

        if (is_null($user)) {
            throw new \Exception('User not found');
        }

        return $user;
    }
}