<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;

        $posts = Post::with(['category', 'tags'])
            ->when($q, fn($s) => $s->where(fn($x) => $x->where('title', 'like', "%$q%")->orWhere('content', 'like', "%$q%")))
            ->when($request->from,  fn($s, $d) => $s->whereDate('published_at', '>=', $d))
            ->when($request->until, fn($s, $d) => $s->whereDate('published_at', '<=', $d))
            ->latest('published_at')->paginate(6)->withQueryString();

        $categories = Category::withCount('posts')->orderBy('name')->get();
        $recent     = Post::latest('published_at')->take(5)->get();

        return view('blog.index', compact('posts', 'categories', 'recent', 'q'));
    }

    public function category($slug, Request $request)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $posts = Post::with(['category', 'tags'])
            ->where('category_id', $category->id)
            ->when($request->q, fn($s) => $s->where(fn($x) => $x->where('title', 'like', "%{$request->q}%")->orWhere('content', 'like', "%{$request->q}%")))
            ->latest('published_at')->paginate(6)->withQueryString();

        $categories = Category::withCount('posts')->orderBy('name')->get();
        $recent     = Post::latest('published_at')->take(5)->get();

        return view('blog.category', compact('posts', 'categories', 'recent', 'category'));
    }

    public function show($slug)
    {
        $post = Post::with(['category', 'tags'])->where('slug', $slug)->firstOrFail();
        $recent = Post::latest('published_at')->take(5)->get();
        $categories = Category::withCount('posts')->orderBy('name')->get();

        return view('blog.show', compact('post', 'recent', 'categories'));
    }
}
