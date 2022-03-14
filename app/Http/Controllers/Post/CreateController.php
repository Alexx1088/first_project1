<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Posta;
use App\Models\Tag;

class CreateController extends BaseController
{

public function __invoke()
{
    // TODO: Implement __invoke() method.

    $categories = Category::all();

    $tags = Tag::all();

    return view('post.create', compact('categories', 'tags'));

}
}
