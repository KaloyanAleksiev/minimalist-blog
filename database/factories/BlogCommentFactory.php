<?php

namespace Database\Factories;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogCommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'blog_post_id' => BlogPost::factory()->create(),
            'comment' => $this->faker->sentence(rand(10, 30)),
            'commented_on' => now()
        ];
    }
}
