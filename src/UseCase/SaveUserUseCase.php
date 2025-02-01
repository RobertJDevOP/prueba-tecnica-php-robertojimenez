<?php

namespace App\UseCase;

use App\DTO\UserRequest;
use App\Entity\User;
use App\Repository\UserRepositoryInterface;

class SaveUserUseCase
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute(UserRequest $request): User
    {
        $user = new User($request->getName(), $request->getEmail(), $request->getPassword());
        $this->userRepository->save($user);

        return $user;
    }
}
