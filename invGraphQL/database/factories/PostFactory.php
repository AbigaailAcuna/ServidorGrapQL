<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "author_id" => User::factory(),
            "title" =>$this->faker->text(maxNbChars:5),
            "content" =>$this->faker->text(maxNbChars:50)
        ];
    }
}
