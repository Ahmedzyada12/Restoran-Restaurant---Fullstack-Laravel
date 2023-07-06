<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' =>$this->faker->sentence(5),
            'image' =>'https://picsum.photos/200/300',
            'content' =>$this->faker->text(300),
            'category_id' =>$this->faker->numberBetween(1,3),
        ];
    }
}
