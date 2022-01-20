<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Post;

class IndexPostTest extends TestCase
{
    /**
     * Check if posts can be returned correctly in the api
     *
     * @test
     * @return void
     */
    public function users_can_get_all_prost()
    {
        $posts = Post::factory()->make();

        $response = $this->get(route('api.post.index'))
        ->assertJsonStructure(
            [
                '*' => [
                    'id',
                    'title',
                    'body',
                    'created_at',
                    'updated_at'
                ]
            ]   
        )
        ->assertStatus(200);
    }
}