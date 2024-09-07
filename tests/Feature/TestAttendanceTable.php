<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class TestAttendanceTable extends TestCase
{
    public function testInsert()
    {

        DB::table('employee')->insert([
            'nama_pegawai' => 'Raihan Zafran',
            'nomor_pegawai' => '10969',
            'password' => 'Raihan Zafran',
        ]);

        DB::table('attendance')->insert([
            'employee_id' => 1,
            'tanggal' => Carbon::now('asia/jakarta')->format('d F y'),
            'jam' => Carbon::now('asia/jakarta')->format('H:i:s'),
            'status' => 'true'
        ]);

        self::assertTrue(true);

    }

    public function testJoin()
    {

        $collection = DB::table('attendance')
            ->join('employee', 'attendance.employee_id', '=', 'employee.id')
            ->select('employee.nama_pegawai as nama', 'attendance.tanggal as tanggal', 'attendance.jam as jam',)
            ->get();

            var_dump($collection->all());

    }


}
