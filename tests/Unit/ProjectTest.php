<?php

namespace Tests\Unit;

use App\Models\Project;
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_has_a_path()
    {
        $project = Project::factory()->create();

        $this->assertEquals("/projects/{$project->id}", $project->path());
    }

    public function test_it_belongs_to_an_owner()
    {
        $project = Project::factory()->create();

        $this->assertInstanceOf(User::class, $project->owner);
    }
}
