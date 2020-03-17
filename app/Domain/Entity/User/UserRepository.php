<?php
/**
 * Created by PhpStorm.
 * User: kazu22002
 * Date: 2020-03-17
 * Time: 21:22
 */

namespace App\Domain\Entity\User;

interface UserRepository
{
    public function findById(UserId $id);

    public function findAll();

    public function store(User $user);

    public function delete(UserId $id);

}
