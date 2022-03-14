<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Posta;

class IndexController extends BaseController
{

public function __invoke()
{
    // TODO: Implement __invoke() method.

    $posts = Posta::all();


    return view('post.index', compact('posts'));

}
}
