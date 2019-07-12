<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::all();

        return view ('blogfront', ['allblogs' => $blogs]);

        // var_dump($blogs);
    }

    public function getblogs()
    {
        $blogs = Blog::all();

        //$response = [
        //  'allblogs' => $blogs
        //];
        // return response()->json($response, 200);
        return ($blogs);
        // var_dump ($blogs);
    }
}
