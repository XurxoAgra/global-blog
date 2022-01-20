<?php

namespace App\Http\Controllers\Web;

use App\Models\Post;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     *  Return view with all posts
     *  @return view 
     */
    
    public function index() 
    {
        return view('post.index', ['posts' => Post::paginate(12)]);
    }
    
    /**
     * Show the post.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(int $id)
    {
        return view('post.show', ['post' => Post::findOrFail($id)]);
    }
}
