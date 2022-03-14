<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Posta;

class DestroyController extends BaseController
{

public function __invoke()
{
    // TODO: Implement __invoke() method.

    $post = Posta::find(14);

    $post->delete();

    dd('deleted');


}
}
