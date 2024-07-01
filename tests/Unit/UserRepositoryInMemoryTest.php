<?php

namespace Tests\Unit;

session_start();

use App\Ports\UserRepository;
use Tests\Unit\AbstractUserRepository;
use App\Adapters\UserRepositoryInMemory;

/**
 * UserRepositoryInMemoryTest contain only the instantiation logic of the implementations.
 * They do not contain any test logic.
 */
class UserRepositoryInMemoryTest extends AbstractUserRepository
{
    public function repository(): UserRepository
    {
        $_SESSION['users'] = [];

        return new UserRepositoryInMemory();
    }
}