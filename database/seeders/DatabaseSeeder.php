<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Posta;
use App\Models\Prop;
use App\Models\Provka;
use App\Models\Tag;
use Database\Factories\ProvkaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

$props = Prop::factory(7)->create();

        //  $posts = Posta::factory(10)->create();

       /* Category::factory(20)->create();
        $tags = Tag::factory(50)->create();
        $posts = Posta::factory(200)->create();

        foreach ($posts as $post) {
            $tagsIds = $tags->random(5)->pluck('id');
            $post->tags()->attach($tagsIds);

            // \App\Models\User::factory(10)->create();
             }*/
        }
    }
