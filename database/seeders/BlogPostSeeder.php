<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        BlogPost::insert([
            [
                'id' => 1,
                'title' => 'How to bake a cake',
                'body' => '<p>Blog body</p>',
                'published_on' => '2020-02-01',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 2,
                'title' => 'How to bake cookies',
                'body' => '<p>Blog body</p>',
                'published_on' => '2020-02-14',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 3,
                'title' => 'How to bake bread',
                'body' => '<p>Blog body</p>',
                'published_on' => '2020-02-25',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 4,
                'title' => 'How to bake custard',
                'body' => '<p>Blog body</p>',
                'published_on' => '2020-03-10',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 5,
                'title' => 'The joys of raisins',
                'body' => '<p>Blog body</p>',
                'published_on' => '2020-03-16',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 6,
                'title' => 'Making pizza dough',
                'body' => '<p>Blog body</p>',
                'published_on' => '2020-03-28',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 7,
                'title' => 'To kneed, or not to kneed',
                'body' => '<p>Blog body</p>',
                'published_on' => '2020-04-04',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 8,
                'title' => 'Is Bake Off better on Channel 4?',
                'body' => '<p>Blog body</p>',
                'published_on' => '2020-04-21',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 9,
                'title' => 'The perfect Victoria Sponge',
                'body' => 'tes',
                'published_on' => '2020-03-01',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 10,
                'title' => 'How to make a croissant',
                'body' => 'test',
                'published_on' => '2020-02-01',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
