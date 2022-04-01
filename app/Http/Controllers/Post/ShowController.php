<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post\PostResource;
use App\Models\Posta;

class ShowController extends BaseController
{

public function __invoke(Posta $post)
{
    // TODO: Implement __invoke() method.

 //  return view('post.show', compact('post'));
   // dd($post);

    return new PostResource($post);
}
}
