<?php

namespace Tests\Unit;

use App\Models\Project as P;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Project extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_has_a_path()
    {
        $project = P::factory()->create();

        $this->assertEquals("/projects/{$project->id}", $project->path());
    }
}
