<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Author;

class AuthorControllerTest extends TestCase
{
    use RefreshDatabase; 

    public function test_author_can_be_created_via_post_request(): void
    {
        $payload = [
            'name' => 'George',
            'surname' => 'Orwell',
            'birthdate' => '1903-06-25'
        ];

        $response = $this->post(route('authors.store'), $payload);

        $response->assertStatus(302);
        $response->assertRedirect('/authors');

        $this->assertDatabaseHas('authors', [
            'name' => 'George',
            'surname' => 'Orwell',
        ]);
    }
}