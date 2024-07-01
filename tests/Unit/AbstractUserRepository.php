<?php

namespace Tests\Unit;

use App\Entities\User;
use App\Ports\UserRepository;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;

abstract class AbstractUserRepository extends TestCase
{
    protected abstract function repository(): UserRepository;

    #[Test]
    public function it_able_to_find_user_by_id(): void
    {
        $repository = $this->repository();
        
        $user = new User(1, 'John Doe');

        $repository->add($user);

        $this->assertEquals($user, $repository->find(1));
    }

    #[Test]
    public function it_throws_exception_if_user_not_found_by_id(): void
    {
        $repository = $this->repository();

        $this->expectExceptionMessage('User not found');

        $repository->find(123456);
    }
}