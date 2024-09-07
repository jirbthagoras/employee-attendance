<?php

namespace App\Services;

use App\Services\Impl\AdminService;

class AdminServiceImpl implements AdminService
{
    public function addEmployee(): void
    {
        echo 'This Is addEmployee function' . PHP_EOL;
    }

    public function getAllAttendance()
    {
        echo 'This Is getAllAttendance function' . PHP_EOL;
    }

}
