<?php

namespace Wp\Posts;

use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index($slug, Post $post)
    {
        // Tìm post theo cột post_name (slug trong WP)
        $result = $post->published()
            ->where('post_name', $slug)
            ->firstOrFail();

        return view('wp-post::post', ['p' => $result]);
    }
}
