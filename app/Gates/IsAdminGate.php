<?php

namespace App\Gates;

class IsAdminGate
{
    public function check_user($user)
    {
        return $user->email === "emma@gmail.com";
    }
}
