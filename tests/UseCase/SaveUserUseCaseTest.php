<?php

namespace Tests\UseCase;

use App\DTO\UserRequest;
use App\Entity\User;
use App\Repository\UserRepository;
use App\UseCase\SaveUserUseCase;
use PHPUnit\Framework\TestCase;

class SaveUserUseCaseTest extends TestCase
{
    public function testExecute()
    {
        $userRepository = new UserRepository();
        $useCase = new SaveUserUseCase($userRepository);

        $request = new UserRequest('Carlos López', 'carlos@example.com', 'mypassword');
        $user = $useCase->execute($request);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals('Carlos López', $user->getName());
        $this->assertEquals('carlos@example.com', $user->getEmail());
        $this->assertTrue($user->verifyPassword('mypassword'));

        $retrievedUser = $userRepository->getById($user->getId());
        $this->assertNotNull($retrievedUser);
        $this->assertEquals('Carlos López', $retrievedUser->getName());
    }
}
