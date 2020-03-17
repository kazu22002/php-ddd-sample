<?php
/**
 * Created by PhpStorm.
 * User: kazu22002
 * Date: 2020-03-17
 * Time: 21:22
 */

namespace App\Infrastructure\Repositories\Eloquent;

use App\Domain\Entity\User\User;
use App\Domain\Entity\User\UserId;
use App\Domain\Entity\User\UserRepository;

class EloquentUserRepository implements UserRepository
{
    public function findById(UserId $id)
    {
        // TODO: Implement findById() method.
    }

    public function findAll()
    {
        // TODO: Implement findAll() method.
    }

    public function store(User $user)
    {
        // TODO: Implement store() method.
    }

    public function delete(UserId $id)
    {
        // TODO: Implement delete() method.
    }

}
