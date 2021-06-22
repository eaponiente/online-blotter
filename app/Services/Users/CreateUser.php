<?php

namespace App\Services\Users;

use App\Models\User;

class CreateUser
{
    /**
     * @param $param
     * @return User
     */
    public function execute($param): User
    {
        $param['password'] = bcrypt($param['password']);
        return User::create($param);
    }
}
