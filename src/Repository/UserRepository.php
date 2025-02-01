<?php

namespace App\Repository;

use App\Entity\User;
use App\Exception\UserDoesNotExistException;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var User[]
     */
    private array $users = [];
    private int $autoIncrement = 1;

    public function save(User $user): void
    {
        $user->setId($this->autoIncrement++);
        $this->users[$user->getId()] = $user;
    }

    /**
     * @throws UserDoesNotExistException
     */
    public function update(User $user): void
    {
        if (!isset($this->users[$user->getId()])) {
            throw new UserDoesNotExistException();
        }
        $this->users[$user->getId()] = $user;
    }

    /**
     * @throws UserDoesNotExistException
     */
    public function delete(User $user): void
    {
        if (!isset($this->users[$user->getId()])) {
            throw new UserDoesNotExistException();
        }
        unset($this->users[$user->getId()]);
    }

    /**
     * @throws UserDoesNotExistException
     */
    public function getByIdOrFail(int $id): User
    {
        $user = $this->getById($id);
        if (null === $user) {
            throw new UserDoesNotExistException();
        }

        return $user;
    }

    public function getById(int $id): ?User
    {
        return $this->users[$id] ?? null;
    }
}
