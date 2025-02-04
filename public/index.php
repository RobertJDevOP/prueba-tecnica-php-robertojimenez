<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\DTO\UserRequest;
use App\Repository\UserRepository;
use App\UseCase\SaveUserUseCase;

$requestData = [
    'name' => 'Laura Martínez',
    'email' => 'laura@example.com',
    'password' => 'securepassword',
];

$userRequest = new UserRequest($requestData['name'], $requestData['email'], $requestData['password']);

$userRepository = new UserRepository();

$saveUserUseCase = new SaveUserUseCase($userRepository);

$user = $saveUserUseCase->execute($userRequest);

echo 'Usuario : ' . $user->getName() . "\n";
