<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Posta;

class UpdateController extends BaseController
{

public function __invoke(UpdateRequest $request, Posta $post)
{
    // TODO: Implement __invoke() method.

    $data = $request->validated();

 //   dd($data);

   $post = $this->service->update($post, $data);

 //  return new PostResource($post);

   return redirect()->route('post.show', $post->id);
}
}
