<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    // indexメソッドを追加
    public function index(Post $post)
    {
        return $post->get();
 }
}
