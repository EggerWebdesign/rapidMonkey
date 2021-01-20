<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id'         => User::all()->random()->id,
            'post_title'        => $this->faker->unique()->word,
            'post_body'         => $this->faker->paragraph,
            'slug'              => $this->faker->unique()->word,
            'post_status'       => 'post',
            'post_type'         => 'publish',
            'comment_status'    => $this->faker->boolean,
        ];
    }
}
