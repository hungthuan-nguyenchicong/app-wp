<?php

namespace Wp\Posts;

class PostService
{
    public function index($slug)
    {
        $result = Post::published()
            ->where('post_name', $slug)
            ->firstOrFail();
        // dd($result->post_content);
        $actionContent = app(\Wp\Posts\Actions\PostActionContent::class);
        $content = $actionContent->delComment($result->post_content);
        // dd($content);
        $result->post_content = $content;

        return $result;
    }
}
