<?php

namespace Tests\Feature\Web;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Post;

class ShowPostTest extends TestCase
{
    /**
     * Check if the users can show a post in the web
     * 
     * @test
     * @return void
     */
    public function users_can_show_current_post()
    {
        $post = Post::factory()->create();

        $response = $this->get(route('web.posts.read', $post->id))
        ->assertViewIs('post.show')
        ->assertSeeText($post->title)
        ->assertSeeText($post->body)
        ->assertStatus(200);
    }
}
