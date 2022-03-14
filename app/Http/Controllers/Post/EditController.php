<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Posta;
use App\Models\Tag;

class EditController extends BaseController
{

public function __invoke(Posta $post)
{
    // TODO: Implement __invoke() method.

    $categories = Category::all();

    $tags = Tag::all();

    // dd($categories);

    return view('post.edit', compact('post','categories', 'tags'));

}
}
