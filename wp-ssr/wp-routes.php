<?php

use Illuminate\Support\Facades\Route;

Route::get('posts/{slug}', [\Wp\Posts\PostController::class, 'index']
);
