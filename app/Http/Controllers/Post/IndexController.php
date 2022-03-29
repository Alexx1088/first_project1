<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Posta;

class IndexController extends BaseController
{

public function __invoke(FilterRequest $request)

    {

     $this->authorize('view', auth()->user());

    $data = $request->validated();

    /*$page = $data['page'] ?? 1;

    $perPage = $data['per_page'] ?? 10;*/

    $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

   // $posts = Posta::filter($filter)->paginate($perPage, ['*'], 'page', $page);
    $posts = Posta::filter($filter)->paginate(10);

   // return PostResource::collection($posts);

   return view('post.index', compact('posts'));


}
}
