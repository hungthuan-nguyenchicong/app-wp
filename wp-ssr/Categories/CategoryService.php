<?php

namespace Wp\Categories;

class CategoryService
{
    public function index(): object
    {
        // $cat = Category::all();
        // $cat = Category::where('taxonomy', 'category')->with('term')->get();
        // $cat = Category::with('term:term_id,name,slug')
        //     ->get(['term_id', 'taxonomy']);
        // $column = ['term_id', 'taxonomy'];
        // $cat = Category::with('term:term_id,name,slug')
        //     ->select($column)
        //     ->get();

        $columnCat = ['term_id', 'taxonomy'];
        $columnTerm = ['term_id', 'name', 'slug'];
        // $cat = Category::with(['term' => fn ($query) => $query->select('term_id', 'name', 'slug')
        //     ->where('slug', '!=', 'uncategorized'),
        // ])
        //     ->select($column)
        //     ->get();

        $cat = Category::whereHas('term', fn ($query) => $query->where('slug', '!=', 'uncategorized')
        )
            ->with(['term' => fn ($query) => $query->select($columnTerm),
            ])
            ->select($columnCat)->get();

        // dd($cat);
        return $cat;
    }
}
