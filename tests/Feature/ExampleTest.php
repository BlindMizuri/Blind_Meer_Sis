<?php

<<<<<<< HEAD
namespace SisLaravelMain\tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use SisLaravelMain\tests\TestCase;
=======
namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
>>>>>>> b3251bc7753aafdbd99fc811f81d2827256b9882

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
