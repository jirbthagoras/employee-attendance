<?php

namespace Tests\Feature;

use App\Services\Impl\AdminService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;
use function PHPUnit\Framework\assertTrue;

class TestAdminService extends TestCase
{
    private AdminService $adminService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->adminService = $this->app->make(AdminService::class);

    }


    public function testSample(): void
    {
        $this->adminService->getAllAttendance();

        self::assertTrue(true);
    }

    public function testAddEmployee()
    {

        $this->adminService->addEmployee('122', 'Banon Kenta', 'set');

        self::assertTrue(true);

    }

    public function testMatchPassword()
    {

        $collection = DB::table('employee')->select('password')->get();

        $collection->each(function ($item) {

            if(Hash::check('C8pmxM', $item->password)) {
                echo 'Password True' . PHP_EOL;
            }

        });

        assertTrue(true);

    }


}
