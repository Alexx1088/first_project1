<?php

namespace Database\Factories;

use App\Models\Posta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Posta>
 */
class PostFactory extends Factory
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
           'name'=>'blabla',
            'surname'=>'qq',
        ];
    }
}
