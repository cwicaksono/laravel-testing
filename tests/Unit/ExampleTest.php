<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testOpenLandingPage()
    {
        $response = $this->call('GET', '/');
        $this->assertRegexp('/Laravel/', $response->getContent());
    }

    public function testOpenLoginPage()
    {
        $response = $this->call('GET', 'login');
        $this->assertRegexp('/Login/', $response->getContent());
    }

    public function TestOpenRegisterPage()
    {
        $response = $this->call('GET', 'register');
        $this->assertRegexp('/Register/', $response->getContent());
    }
}
