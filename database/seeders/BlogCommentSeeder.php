<?php

namespace Database\Seeders;

use App\Models\BlogComment;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BlogCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        BlogComment::insert([
            [
                'blog_post_id' => 2,
                'comment' => 'These are great cookies.',
                'commented_on' => '2020-02-14 18:42:44.158',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'blog_post_id' => 6,
                'comment' => 'Fairly average dough.',
                'commented_on' => '2020-04-08 11:56:21.136',
                'created_at' => $now,
                'updated_at' => $now,

            ],
            [
                'blog_post_id' => 2,
                'comment' => 'Yummy cookies.',
                'commented_on' => '2020-03-08 10:25:35.215',
                'created_at' => $now,
                'updated_at' => $now,

            ],
            [
                'blog_post_id' => 4,
                'comment' => 'My custard was lumpy.',
                'commented_on' => '2020-04-08 08:56:12.109',
                'created_at' => $now,
                'updated_at' => $now,

            ],
            [
                'blog_post_id' => 7,
                'comment' => 'Comment body',
                'commented_on' => '2020-05-10 11:21:08.112',
                'created_at' => $now,
                'updated_at' => $now,

            ],
            [
                'blog_post_id' => 1,
                'comment' => 'Comment body',
                'commented_on' => '2020-02-21 11:46:18.147',
                'created_at' => $now,
                'updated_at' => $now,

            ],
        ]);
    }
}
