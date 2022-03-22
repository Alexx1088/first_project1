<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Posta;

class IndexController extends Controller
{

public function __invoke()
{
 return view('admin.post.index');

}
}
