<?php

namespace Tests\Repository;

use App\Entity\User;
use App\Exception\UserDoesNotExistException;
use App\Repository\UserRepository;
use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{
    private UserRepository $userRepository;

    protected function setUp(): void
    {
        $this->userRepository = new UserRepository();
    }

    public function testSaveAndGetById()
    {
        $user = new User('Ana Gómez', 'ana@example.com', 'password');
        $this->userRepository->save($user);

        $retrievedUser = $this->userRepository->getById($user->getId());
        $this->assertNotNull($retrievedUser);
        $this->assertEquals('Ana Gómez', $retrievedUser->getName());
    }

    public function testUpdate()
    {
        $user = new User('Ana Gómez', 'ana@example.com', 'password');
        $this->userRepository->save($user);

        $user->setName('Ana Actualizada');
        $this->userRepository->update($user);

        $updatedUser = $this->userRepository->getById($user->getId());
        $this->assertEquals('Ana Actualizada', $updatedUser->getName());
    }

    public function testDelete()
    {
        $user = new User('Ana Gómez', 'ana@example.com', 'password');
        $this->userRepository->save($user);

        $this->userRepository->delete($user);
        $deletedUser = $this->userRepository->getById($user->getId());

        $this->assertNull($deletedUser);
    }

    public function testGetByIdThrowsExceptionWhenUserNotFound()
    {
        $this->expectException(UserDoesNotExistException::class);
        $this->userRepository->getByIdOrFail(999);
    }
}
