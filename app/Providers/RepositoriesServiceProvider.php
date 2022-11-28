<?php

namespace App\Providers;

use App\Repositories\BlogPost\BlogPostRepository;
use App\Repositories\Interfaces\BlogPost\BlogPostRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlogPostRepositoryInterface::class, BlogPostRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
