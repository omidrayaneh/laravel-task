<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ActivityTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function  test_find_activity_by_id()
    {

         $response = $this->get('/api/activity/');
         if(!$response)
               return $response->assertStatus(404);
         else
               return $response->assertStatus(404);



    }
}
