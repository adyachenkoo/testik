<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(5),
            'content'=>fake()->text(80),
            'image'=>'https://placehold.co/400x300',
            'likes'=>random_int(1, 400),
            'views'=>random_int(400, 2000),
            'category_id'=>Category::get()->random()->id,
        ];
    }
}
