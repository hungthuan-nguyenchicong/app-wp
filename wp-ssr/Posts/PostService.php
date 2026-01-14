<?php

namespace Wp\Posts;

class PostService
{
    public function index($slug): object
    {
        $column = ['ID', 'post_title', 'post_content'];
        $result = Post::published()
            ->select($column)
            ->where('post_name', $slug)
            ->firstOrFail();
        // dd($result);
        $actionContent = app(\Wp\Posts\Actions\PostActionContent::class);
        $cleanContent = $actionContent->delComment($result->post_content);

        // Sử dụng setRawAttribute để ép kiểu dữ liệu mới vào mà không trigger các logic khác
        $result->setAttribute('post_content', $cleanContent);

        return $result;
    }
}
