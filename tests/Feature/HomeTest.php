<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStatusCode()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
    public function testBody()
    {
        $response = $this->get('/home');

        $response->assertSeeText("Hello");
    }
}
