<?php

namespace App\Services\Impl;

interface UserService
{
    public function attend(string $nomor_pegawai, string $password);

    public function getUserAttendance();
}
