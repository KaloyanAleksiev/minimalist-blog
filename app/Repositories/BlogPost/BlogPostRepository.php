<?php


namespace App\Repositories\BlogPost;


use App\Models\BlogPost;
use App\Repositories\Interfaces\BlogPost\BlogPostRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class BlogPostRepository implements BlogPostRepositoryInterface
{

    private BlogPost $model;

    public function __construct(BlogPost $blogPost)
    {
        $this->model = $blogPost;
    }

    public function getPostTitleWithCommentCount(): ?Collection
    {
        return $this->model->select(['id', 'title'])->withCount('comments')->get();
    }

    public function getPostWithComments(int $postId): ?BlogPost
    {
        return $this->model->select(['id', 'title', 'body'])
            ->with([
                'comments' => function ($q) {
                    $q->select(['blog_post_id','comment'])->orderBy('id', 'desc');
                }
            ])->find($postId);
    }
}
