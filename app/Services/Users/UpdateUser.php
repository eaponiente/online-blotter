<?php

namespace App\Services\Users;

use App\Models\User;

class UpdateUser
{
    /**
     * @param User $user
     * @param $param
     * @return User
     */
    public function execute(User $user, $param): User
    {
        $param['password'] = filled($param['password']) ? bcrypt($param['password']) : $user->password;
        $user->update($param);

        return $user->fresh();
    }
}
