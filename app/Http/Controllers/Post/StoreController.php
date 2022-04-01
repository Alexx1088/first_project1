<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Posta;

class StoreController extends BaseController
{

public function __invoke(StoreRequest $request)
{
    // TODO: Implement __invoke() method.


    $data = $request->validated();
  //  dd($data);

   $post = $this->service->store($data);

  return $post instanceof Posta ? new PostResource($post) :$post;

  // return new PostResource($post);

   // return redirect()->route('post.index');

}
}
