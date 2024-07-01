<?php

namespace Tests\Unit;

use App\Ports\UserRepository;
use Tests\Unit\AbstractUserRepository;
use App\Adapters\UserRepositoryInSession;

/**
 * UserRepositoryInSessionTest contain only the instantiation logic of the implementations.
 * They do not contain any test logic.
 */
class UserRepositoryInSessionTest extends AbstractUserRepository
{
    public function repository(): UserRepository
    {
        return new UserRepositoryInSession();
    }
}
