<?php

namespace Wp\Posts\Actions;

class PostActionContent
{
    public function delComment(string $content): string
    {
        $content = str_replace(["\r", "\n"], '', $content);

        $pattern = '/<!--.*?-->\s*/s';

        // $pattern = '#<'.'!--.*?--'.'>#s';
        return preg_replace($pattern, '', $content);
    }
}
