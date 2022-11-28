<?php


namespace App\Repositories\Interfaces\BlogPost;


use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Collection;

interface BlogPostRepositoryInterface
{
    public function getPostTitleWithCommentCount():? Collection;

    public function getPostWithComments(int $postId):? BlogPost;
}
