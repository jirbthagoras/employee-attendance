<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestCarbon extends TestCase
{
    /**
     * A basic feature test example.
     */


    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testCarbon()
    {

        $startTime = Carbon::createFromTimeString('20:00:00', 'asia/jakarta');

        $now = Carbon::now('asia/jakarta');

        echo $now->format('d F Y') . PHP_EOL;



        echo Carbon::parse($now) . PHP_EOL;

        // Get the employee's check-in time (already stored in timestamp format)
        $checkInTime = Carbon::parse($now);

        echo $checkInTime . PHP_EOL;

        var_dump($startTime->greaterThan($checkInTime));

        // Compare the times
        if ($checkInTime->greaterThan($startTime)) {
            // The employee is late
            echo "Employee is late";
        } else {
            // The employee is on time
            echo "Employee is on time";
        }

        self::assertTrue(true);

    }
}
