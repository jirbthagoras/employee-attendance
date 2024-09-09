<?php

namespace App\Services;

use App\Services\Impl\UserService;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserServiceImpl implements UserService
{
    public function attend(string $nomor_pegawai, string $password)
    {

        $startTime = Carbon::createFromTimeString('12:00:00', 'asia/jakarta');
        $checkInTime = Carbon::parse(Carbon::now( 'asia/jakarta'));

        if ($checkInTime->greaterThan($startTime)) {
            // The employee is late
            $status = "Employee is late";
        } else {
            // The employee is on time
            $status =  "Employee is on time";
        }

        $collection = DB::table('employee')
            ->where('nomor_pegawai', "=", $nomor_pegawai)
            ->get();

        if($collection->isNotEmpty()){

            if($collection[0]->is_admin)
            {
                session()->put('is_admin', true);
                session()->put('is_login', true);
                session()->put('nama_pegawai', 'Admin');

                return 'Success';
            }

            if(Hash::check($password, $collection[0]->password)){

                DB::table('attendance')->insert([
                    'employee_id' => $collection[0]->id,
                    'tanggal' => Carbon::now('asia/jakarta')->format('d F Y'),
                    'jam' => Carbon::now('asia/jakarta')->format('H:i:s'),
                    'status' => $status
                ]);

                session()->put('is_login', true);
                session()->put('nama_pegawai', $collection[0]->nama_pegawai);

                return 'Success';
            } else {
                return 'Password Incorrect';
            }
        } else{
            return 'Not Found';
        }

    }

    public function getUserAttendance()
    {
        echo 'This Is getUserAttendance function' . PHP_EOL;
    }


}
