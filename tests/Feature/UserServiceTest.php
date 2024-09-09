<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertTrue;

class UserServiceTest extends TestCase
{

    public function testWhere(): void
    {
        $password = 'VxGFEi';

        $collection = DB::table('employee')
            ->where('nomor_pegawai', '=', 'sa')
            ->get();

        var_dump($collection);

        if(!$collection->isEmpty())
        {
            if(Hash::check($password, $collection[0]->password))
            {
                echo "Login Success";
            }
        } else {
            echo "Account Not Found";
        }

        assertTrue(true);
    }

    public function testQuery()
    {
        $collection = DB::table('attendance')
            ->where('employee_id', '=', 4)
            ->select(DB::raw('ROW_NUMBER() OVER (ORDER BY id) as number_row, tanggal, jam, status'))
            ->get();
        var_dump($collection);
    }


}
