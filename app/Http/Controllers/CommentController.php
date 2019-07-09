<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Comment;

class CommentController extends Controller
{
    public function index($id)
    {
        $blog = Blog::find($id);

        return view ('commentpage', ['blog' => $blog]);

        // var_dump($blog->comments);
    }
}
