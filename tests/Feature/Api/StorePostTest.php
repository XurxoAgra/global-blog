<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Post;

class StorePostTest extends TestCase
{
    /**
     * Check if users can create a post with the api
     * 
     * @test
     * @return void
     */
    public function users_can_create_new_post()
    {
        $post = Post::factory()->create();

        $response = $this->get(route('api.post.store', $post))
            ->assertCreated();
    }
}