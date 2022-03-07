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


    public function update() {

     $post = Posta::find(6);


    $post->update([

       'title' => 'blabla',
       'content' => 'qq',

            ]);

    dd('updated');

    }

    public function delete(){

  $post = Posta::find(2);

  $post->delete();

  dd('deleted');

    }

    public function firstOrCreate() {

$post = Posta::firstOrCreate([
    'title'=> 'some title phpstorm',
    ], [
    'title' => 'some title phpstorm',
    'content' => 'some  content',
    'image' => 'some imageblabla.jpg',
    'likes' => '500',
    'is_published' => '1',

]);

dump($post->content);

dd('finished');

    }

    public function updateOrCreate()
    {

        $anotherPost = [
            'title' => 'update or create some post',
            'content' => 'update or create some  content',
            'image' => 'update or create some imageblabla.jpg',
            'likes' => '50',
            'is_published' => '1',

        ];

        $post = Posta::updateOrCreate([
            'title' => 'some title not phpstorm',


        ],
            [
                'title' => 'some title not phpstorm',
                'content' => 'update or create some content',
                'image' => 'qq or create some imageblabla.jpg',
                'likes' => '5000',
                'is_published' => '1',

            ]);

        dd($post->content);
    }
}
