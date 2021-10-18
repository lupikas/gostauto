<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use SEOTools;

    public function index()
    {
        $this->seo()->setTitle(__('Naujienos'));

        $posts = Post::paginate(9);

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        $this->seo()->setTitle($post->title);

        return view('posts.show', [
            'post' => $post,
            'doctors' => $post->doctors,
        ]);
    }
}
