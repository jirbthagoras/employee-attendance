<?php

namespace Tests\Feature;

use App\Services\Impl\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use function PHPUnit\Framework\assertTrue;

class TestUserService extends TestCase
{

    private UserService  $userService;
    protected function setUp(): void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserService::class);

    }


    public function testSample(): void
    {

        $this->userService->attend();

        assertTrue(true);

    }
}
