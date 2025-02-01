<?php

namespace Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserCreation()
    {
        $user = new User('Juan Pérez', 'juan@example.com', 'secret');

        $this->assertEquals('Juan Pérez', $user->getName());
        $this->assertEquals('juan@example.com', $user->getEmail());
        $this->assertTrue($user->verifyPassword('secret'));
    }

    public function testSetName()
    {
        $user = new User('Juan Pérez', 'juan@example.com', 'secret');
        $user->setName('Juan Actualizado');

        $this->assertEquals('Juan Actualizado', $user->getName());
    }

    public function testSetEmail()
    {
        $user = new User('Juan Pérez', 'juan@example.com', 'secret');
        $user->setEmail('juan.nuevo@example.com');

        $this->assertEquals('juan.nuevo@example.com', $user->getEmail());
    }

    public function testSetPassword()
    {
        $user = new User('Juan Pérez', 'juan@example.com', 'secret');
        $user->setPassword('newsecret');

        $this->assertTrue($user->verifyPassword('newsecret'));
        $this->assertFalse($user->verifyPassword('secret'));
    }
}
