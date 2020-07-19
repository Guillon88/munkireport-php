<?php

namespace Tests\Feature;

use App\Http\Controllers\UnitController;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class UnitControllerTest extends TestCase
{
    use RefreshDatabase;

    protected $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
    }

    protected function tearDown(): void
    {
        $this->user = null;
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function testGet_machine_groups()
    {
        $response = $this->actingAs($this->user)
            ->get('/unit/get_machine_groups');

        $response->assertOk()
            ->assertHeader('Content-Type', 'application/json');
    }

    public function testGet_data()
    {
        $response = $this->actingAs($this->user)
            ->get('/unit/get_data');

        $response->assertOk()
            ->assertHeader('Content-Type', 'application/json');
    }
}