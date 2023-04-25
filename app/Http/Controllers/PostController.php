<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\SavePostRequest;
use Cache;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $latest = Cache::remember('latest_', config('blog.cache_content_time'), function () {
            return Post::with(['author'])
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();
        });

        $highlights = $latest->skip(1)
            ->take(4)
            ->split(2);

        $posts = Cache::remember('posts_', config('blog.cache_content_time'), function () {
            return Post::with(['author'])
                ->orderBy('created_at', 'desc')
                ->skip(5)
                ->paginate(9);
        });

        return view('posts.index', [
            'headline' => $latest->first(),
            'highlights' => $highlights,
            'latest' => $latest,
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['post' => new Post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function store(SavePostRequest $request)
    {
        Post::create($request->validated());

        $this->clearCache();

        return to_route('posts.index')
            ->with('status', __('Post created!'));
    }

    public function update(SavePostRequest $request, Post $post)
    {
        if ($request->user()->cannot('update', $post)) {
            abort(403);
        }

        $post->slug = null;
        $post->update($request->validated());

        $this->clearCache();

        return to_route('posts.show', $post)
            ->with('status', __('Post updated!'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        $this->clearCache();

        return to_route('posts.index')
            ->with('status', __('Post deleted!'));
    }

    private function clearCache(): void
    {
        Cache::forget('latest_');
        Cache::forget('posts_');
    }
}
