<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProjectsTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function auth_user_can_add_a_paper_and_its_details()
    {
        $user = factory(\App\User::class)->create();
        $this->actingAs($user);

        $this->post('/projects', [
            'title' => 'Example',
            'description' => 'This is an example paper',
            'author' => 'Amith Gotamey',
            'paper_url' => 'http://example.com',
            'demo_url' => 'http://example.com/demo',
        ]);

        $this->assertDatabaseHas('projects', [
            'user_id' => $user->id,
            'title' => 'Example'
        ]);
    }
}
