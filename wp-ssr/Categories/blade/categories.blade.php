{{-- @dd($cats) --}}
<h3>Categories</h3>
<hr>
@foreach ($cats as $cat)
<p>Slug: {{$cat->slug}}</p>
    <h2>{{$cat->name}}</h2>
    <hr>
@endforeach