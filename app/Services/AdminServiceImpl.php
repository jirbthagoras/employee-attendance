<?php

namespace App\Services;

use App\Data\Employee;
use App\Services\Impl\AdminService;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminServiceImpl implements AdminService
{
    public function addEmployee(string $nomor_pegawai, string $nama_pegawai, string $password): void
    {

        DB::table('employee')->insert([

            'nama_pegawai' => $nama_pegawai,
            'nomor_pegawai' => $nomor_pegawai,
            'password' => Hash::make($password),

        ]);

    }

    public function getAllAttendance()
    {
        echo 'This Is getAllAttendance function' . PHP_EOL;
    }

}
