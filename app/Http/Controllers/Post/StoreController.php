<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Posta;

class StoreController extends BaseController
{

public function __invoke(StoreRequest $request)
{
    // TODO: Implement __invoke() method.

    $data = $request->validated();

    $this->service->store($data);

    return redirect()->route('post.index');

}
}
