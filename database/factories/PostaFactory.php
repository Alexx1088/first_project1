<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Posta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Posta>
 */
class PostaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Posta::class;

    public function definition()
    {
        return [
            'title'=> $this->faker->sentence(2),
            'content'=>$this->faker->text,
            'image'=> $this->faker->imageUrl(),
            'likes'=> random_int(1, 2000),
            'is_published'=>1,
            'category_id'=> Category::get()->random()->id,

        ];
    }
}
