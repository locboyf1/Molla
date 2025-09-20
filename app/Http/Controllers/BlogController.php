<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {

    }

    public function detail($id, $alias)
    {
        $blog = Blog::find($id)->with('category_blog')->first();
        $related = Blog::where('id', '!=', $blog->id)->where('category_blog_id', '==',$blog->category_blog->id)->with('category_blog')->orderBy('created_at', 'desc')->take(4)->get();
        return view("content.blogs.detail", ["blog" => $blog, "related_blogs" => $related, "active" => "Blogs"]);
    }
}
