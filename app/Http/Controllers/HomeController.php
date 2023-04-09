<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = DB::table('posts')
            ->join('suggestions', 'posts.id', '=', 'suggestions.post_id')
            ->select('posts.*', 'suggestions.*')
            ->get();

print_r($posts);die;
        return view('facebook')->with(['posts' => $posts]);
    }

    public function post()
    {
        $posts = DB::table('posts')->get()->toArray();
        $item = DB::table('suggestions')->get()->toArray();


        foreach ($array as $key => $value) {
            echo $key . ' - ' . $value . '<br>';
        }
        die;

        foreach ($posts as &$post) {
            $post->item = array_filter($item, function ($item) use ($post) {
                return $item->post_id == $post->id;
            });
        }
        return $posts;
    }
}
