<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $post = new Post();
        $post->loadFromRequest($request);
        $post->save();
        $this->createSuggestion($post->id);
        return Post::returnResult();
    }

    public function edit($id)
    {
        return Post::findById($id);
    }

    public function createSuggestion($id)
    {
        $suggestion = new Suggestion();
        $suggestion->post_id = $id;
        $suggestion->save();
    }

    public function post()
    {
        $posts = DB::table('posts')
            ->join('suggestions', 'posts.id', '=', 'suggestions.post_id')
            ->join('users', 'users.id', '=', 'posts.user_id')
            ->select('posts.*', 'suggestions.*', 'users.*')
            ->get();
        return view('post')->with(['posts' => $posts]);
    }
}
