<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     *  Return all posts in json
     *  @return object 
     */
    public function index() 
    {
        return Post::all();
    }

    /**
     * Create new post
     * @param Request $request
     * @return response
     */
    public function store(Request $request) 
    {
        Post::create($request->all());
        return response('The post has been created', 201);
    }
}
