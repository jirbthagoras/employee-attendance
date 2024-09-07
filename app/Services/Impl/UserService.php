<?php

namespace App\Services\Impl;

interface UserService
{
    public function attend(): void;

    public function getUserAttendance();
}
