<?php

namespace App\Repository;

use App\Entity\User;

interface UserRepositoryInterface
{
    public function save(User $user): void;

    public function update(User $user): void;

    public function delete(User $user): void;

    public function getById(int $id): ?User;
}
