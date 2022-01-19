<?php
if (! function_exists('get_posts_api')) {
    /**
     * Define function get_posts_api.
     *
     * @return object
     */
    function get_posts_api()
    {
        $posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'));
        return $posts;
    }
}
?>