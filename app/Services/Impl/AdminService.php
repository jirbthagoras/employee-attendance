<?php

namespace App\Services\Impl;

interface AdminService
{
    public function addEmployee(string $nomor_pegawai, string $nama_pegawai, string $password): void;

    public function getAllAttendance();
}
