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

    /* This would be the way to create data with the posts API */
    /*public function definition()
    {
        $posts = get_posts_api();
        $rand  = rand(0, 100); 
         
        return [
            'title' => $posts[$rand]->title,
            'body' => $posts[$rand]->body,
        ];
    }*/

    public function definition()
    {
        return [
            'title' => $this->faker->country(),
            'body'  => $this->faker->text(5000) ,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
