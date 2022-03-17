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
    $data = $request->validated();

    $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);

    $posts = Posta::filter($filter)->paginate(10);

    return view('post.index', compact('posts'));


  //  $query = Posta::query();
/*
    if (isset($data['category_id'])) {
        $query->where('category_id', $data['category_id']);
    }

    if (isset($data['title'])) {
        $query->where('title', 'like', "%{$data['title']}%");
    }

  if (isset($data['content'])) {
        $query->where('content', 'like', "%{$data['content']}%");
    }*/

//$posts = $query->get();
   // dd($posts);



   // dd($data);

   /* $post = Posta::where('is_published', 1)
        ->where('category_id', $data['category_id'])
        ->get();*/

/*
    $posts = Posta::paginate(10);

//dd($posts);

    return view('post.index', compact('posts'));*/

}
}
