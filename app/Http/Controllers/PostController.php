<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posta;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function index() {

    //$category = Category::find(1);

    $post = Posta::find(3);

    $tag = Tag::find(1);

    dd($tag->posts);

      // dd($category->posts);

 // $posts = Posta::all();

  /*$category = Category::find(1);

   $posts = Posta::where('category_id', $category->id)->get();

  dd($posts);*/

// return view('post.index', compact('posts'));

}

public  function create() {

    return view('post.create');

}

public function store() {

    $data = request()->validate([

        'title'=> '',
        'content'=> '',
        'image'=> '',

    ]);

    Posta::create($data);

    return redirect()->route('post.index');

}

public function show(Posta $post) {

 //   dd($post);

   //$post = Posta::findOrFail($id);

 return view('post.show', compact('post'));

}

public function edit(Posta $post) {

return view('post.edit', compact('post'));


}

    public function update(Posta $post) {

        $data = request()->validate([

            'title'=> 'string',
            'content'=> 'string',
            'image'=> 'string',

        ]);

  //  dd($data);

    $post->update($data);

    return redirect()->route('post.show', $post->id);

    }

    public function destroy(Posta $post) {

    $post->delete();

    return redirect()->route('post.index');

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
