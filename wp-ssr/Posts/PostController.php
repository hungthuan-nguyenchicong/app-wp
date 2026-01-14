<?php

namespace Wp\Posts;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index($slug, PostService $service): View
    {
        // Tìm post theo cột post_name (slug trong WP)
        // $result = $post->published()
        //     ->where('post_name', $slug)
        //     ->firstOrFail();
        // $data = (object) \Wp\Posts\Resources\PostResource::make($result)->resolve();
        // dd($data);
        // $result = $service->index($slug);
        // $data = \Wp\Posts\Resources\PostResource::make($result)->resolve();
        $data = \Wp\Posts\Resources\PostResource::make($service->index($slug))->resolve();

        return view('wp-post::post', ['p' => (object) $data]);
    }
}
