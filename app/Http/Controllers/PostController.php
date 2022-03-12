<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Posta;
use App\Models\PostaTag;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

public function index() {

    $posts = Posta::all();


     return view('post.index', compact('posts'));

}

public  function create() {

    $categories = Category::all();

    $tags = Tag::all();

    return view('post.create', compact('categories', 'tags'));

}

public function store() {

    $data = request()->validate([

        'title'=> 'required|string',
        'content'=> 'required|string',
        'image'=> 'required|string',
        'category_id'=> '',
        'tags'=> '',

    ]);

    $tags = $data['tags'];

unset($data['tags']);

  $post = Posta::create($data);

  $post->tags()->attach($tags);

/*foreach ($tags as $tag) {

    PostaTag::firstOrCreate([
       'tag_id' => $tag,
        'post_id' => $post->id,
    ]);

}*/

  return redirect()->route('post.index');

}

public function show(Posta $post) {

 //   dd($post);

   //$post = Posta::findOrFail($id);

 return view('post.show', compact('post'));

}

public function edit(Posta $post) {

    $categories = Category::all();

    $tags = Tag::all();

   // dd($categories);

    return view('post.edit', compact('post','categories', 'tags'));

}

    public function update(Posta $post) {

        $data = request()->validate([

            'title'=> 'string',
            'content'=> 'string',
            'image'=> 'string',
            'category_id'=> '',
            'tags'=>'',

        ]);

        $tags = $data['tags'];

        unset($data['tags']);

    $post->update($data);

    $post->tags()->sync($tags);

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
