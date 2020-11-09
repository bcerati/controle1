<?php

namespace App\User;

use App\Person;

class Admin extends Person
{
    protected string $role;

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}
