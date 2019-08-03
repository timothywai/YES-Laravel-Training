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

    public function getcomments($id)
    {
        $blog = Blog::find($id);

        // dd($blog);

        $comments = $blog->comments;

        $myObject = (object) array('title' => $blog->title, 'content' => $blog->content, 'comments' => array());

        // $arraysize = sizeof($comments);

        if (sizeof($comments)){
          $ArrySize = sizeof($comments);
          for ($i = 0 ; $i < $ArrySize; $i++)
          {
            $myObject->comments[$i] = $comments[0]->comment;
          }
        }
        // dd($arraysize);


        // dd(json_encode($myObject));
        return (json_encode($myObject));
    }
}
