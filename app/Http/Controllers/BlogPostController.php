<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Repositories\Interfaces\BlogPost\BlogPostRepositoryInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Exception\JsonException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class BlogPostController extends Controller
{
    private BlogPostRepositoryInterface $blogPostRepository;

    public function __construct(BlogPostRepositoryInterface $blogPostRepository)
    {
        $this->blogPostRepository = $blogPostRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $data['posts'] = $this->blogPostRepository->getPostTitleWithCommentCount();

        return view('posts.index', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param BlogPost $blogPost
     * @param Request $request
     * @return JsonResponse
     */
    public function show(BlogPost $blogPost, Request $request)
    {
        if ($request->expectsJson()) {
            $post = $this->blogPostRepository->getPostWithComments($blogPost->id);
            return response()->json($post->toArray());
        }

        throw new MethodNotAllowedHttpException([]);
    }
}
