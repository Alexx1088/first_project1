<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Posta;

class IndexController extends BaseController
{

public function __invoke(FilterRequest $request)

    {

  //   $this->authorize('view', auth()->user());

    $data = $request->validated();

    $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

    $posts = Posta::filter($filter)->paginate(10);

    return view('post.index', compact('posts'));


}
}
