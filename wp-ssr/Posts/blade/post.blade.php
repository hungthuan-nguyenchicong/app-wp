{{-- @dd($p)
@php
    $pattern = '#<' . '!--.*?--' . '>#s';
    $clean_html = preg_replace($pattern, '', $p->post_content);
@endphp --}}
@dd($p)
<h1>{{ $p->title }}</h1>
<div>{!! $p->content !!}</div>