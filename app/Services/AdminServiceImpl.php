<?php

namespace App\Services;

use App\Data\Employee;
use App\Services\Impl\AdminService;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use function Laravel\Prompts\select;

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
        $collection = DB::table('attendance')
            ->join('employee', 'attendance.employee_id', '=', 'employee.id')
            ->select(DB::raw('ROW_NUMBER() OVER (ORDER BY attendance.id) as number_row, employee.nama_pegawai, attendance.tanggal, attendance.jam, attendance.status'))
        ->get();

        return $collection;
    }

}
