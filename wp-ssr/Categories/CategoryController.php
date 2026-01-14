<?php

namespace Wp\Categories;

use App\Http\Controllers\Controller;

// use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(CategoryService $service)
    {
        $data = $service->index();
        // dd($data);
        $cats = \Wp\Categories\Resources\CategoryResource::collection($data)->resolve();
        $cats = array_map(fn ($item) => (object) $item, $cats);
        // dd($cats);

        return view('wp-category::categories', ['cats' => $cats]);
        // return 'abc';
    }
}
