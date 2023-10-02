<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            'posts' => Post::latest()->paginate(3)
        ]);
    }

    public function index()
    {
        $perPage = 3; // Ganti sesuai dengan jumlah item yang ingin ditampilkan per halaman

        return view('posts.index', [
            'posts' => Post::filter(request(['search', 'category', 'author']))->paginate($perPage),
            'categories' => \Stephenjude\FilamentBlog\Models\Category::all(),
        ]);
    }


    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post,
            'relatedPosts' => Post::getRelatedPosts($post)
        ]);
    }

    public function profile()
    {
        return view('about');
    }
}
