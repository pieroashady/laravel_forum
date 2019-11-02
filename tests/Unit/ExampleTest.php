<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{

    use DatabaseMigrations;

    protected $thread;

    public function setUp(): void
    {
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
    }
    /**
     * A basic test example.
     *
     * @return void
     */

    /** @test */
    function a_thread_channel()
    {
        $thread = factory('App\Thread')->create();
        $this->assertInstanceOf('App\Channel', $thread->channel);
    }
}
