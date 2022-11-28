<?php

namespace Tests\Feature;

use Tests\TestCase;

class BlogPostTest extends TestCase
{
    /**
     * Test index page.
     *
     * @return void
     */
    public function test_index_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertViewIs('posts.index')
            ->assertSee(config('app.name'));
    }
}
