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
        if(filled($param['password'])) {
            $param['password'] = bcrypt($param['password']);
        }

        $user->update($param);

        return $user->fresh();
    }
}
