<?php

namespace Tests\Feature\Web;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Post;

class IndexPostTest extends TestCase
{
    /**
     * Check if posts can be listed correctly in the web
     *
     * @test
     * @return void
     */
    public function users_can_show_all_prosts()
    {
        $posts = Post::factory()->make();
        
        $response = $this->get(route('web.posts.index'))
            ->assertViewIs('post.index')
            ->assertSeeText('Recent Posts')
            ->assertSeeText('Show the recent posts')
            ->assertStatus(200);
    }
}
