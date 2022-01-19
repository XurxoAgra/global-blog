<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Get post using the api and feed the database ramdomly
     *
     * @return array
     */
    public function definition()
    {
        $posts = get_posts_api();
        $rand  = rand(0, 100); 
         
        return [
            'title' => $posts[$rand]->title,
            'body' => $posts[$rand]->body,
        ];
    }
}
