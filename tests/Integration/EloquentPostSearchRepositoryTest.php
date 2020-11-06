<?php

namespace Tests\Integration;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Repositories\EloquentPostSearchRepository;

class EloquentPostSearchRepositoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSearchTest()
    {
        $repo = new EloquentPostSearchRepository();
        $this->assertTrue($repo->search('post_'));
    }

    public function testActiveTest()
    {
        $repo = new EloquentPostSearchRepository();
        $this->assertTrue($repo->active());
    }

    public function testInactiveTest()
    {
        $repo = new EloquentPostSearchRepository();
        $this->assertTrue($repo->active());
    }

    public function testAlphabeticallyTest()
    {
        $repo = new EloquentPostSearchRepository();
        $this->assertTrue($repo->active());
    }
}

