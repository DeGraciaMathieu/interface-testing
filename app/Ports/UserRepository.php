<?php

namespace App\Ports;

use App\Entities\User;

interface UserRepository
{
    public function add(User $user): void;
    public function find(int $id): User;
}