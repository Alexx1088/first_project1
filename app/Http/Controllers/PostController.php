<?php

namespace App\Http\Controllers;

use App\Models\Posta;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function index() {

  $post = Posta::where('is_published', 1)->first();

  dd($post->title);

}

public  function create(){

    $postArr = [
        [
        'title' => 'title of post from phpstorm',
        'content' => 'some interesting content',
        'image' => 'imageblabla.jpg',
        'likes' => '20',
        'is_published' => '1',
        ],

        [
            'title' => 'another title of post from phpstorm',
            'content' => 'anothersome interesting content',
            'image' => 'another imageblabla.jpg',
            'likes' => '50',
            'is_published' => '1',
        ],

    ];

   foreach ($postArr as $post) {

     Posta::create($post);

   }

}


/*
    public function update() {

    }*/
}
