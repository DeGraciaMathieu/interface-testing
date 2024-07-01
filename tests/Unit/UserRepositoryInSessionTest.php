<?php

namespace Tests\Unit;

use App\Ports\UserRepository;
use Tests\Unit\AbstractUserRepository;
use App\Adapters\UserRepositoryInSession;

class UserRepositoryInSessionTest extends AbstractUserRepository
{
    public function repository(): UserRepository
    {
        return new UserRepositoryInSession();
    }
}
