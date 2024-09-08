<?php

namespace App\Services;

use App\Services\Impl\UserService;

class UserServiceImpl implements UserService
{
    public function attend(): void
    {



    }

    public function getUserAttendance()
    {
        echo 'This Is getUserAttendance function' . PHP_EOL;
    }

}
