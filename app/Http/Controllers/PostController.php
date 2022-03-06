<?php

namespace App\Http\Controllers;

use App\Models\Posta;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function index() {

  $post = Posta::find(1);

  dd($post->title);

}

/*
    public function update() {

    }*/
}
