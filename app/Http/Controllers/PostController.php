<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post();
        $post->loadFromRequest($request);
        $post->save();
        return Post::returnResult();
    }

    public function edit($id)
    {
        return Post::findById($id);
    }

    public function update($id, Request $request)
    {

    }
}
