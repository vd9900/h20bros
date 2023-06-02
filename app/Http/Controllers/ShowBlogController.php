<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\BlogsModel;

class ShowBlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = BlogsModel::latest()->paginate(6);
        if ($request->ajax()) {
            return view('app.pagination.blogs.index', compact('blogs'))->render();
        }
        return view("app.index_blog", compact('blogs'));
    }


    public function blog($slug)
    {
        $blog = BlogsModel::where('slug', $slug)->get()[0] ?? abort(404);
        $blogs = BlogsModel::latest()->limit(4)->get();
        
        return view('app.blog', compact('blog', 'blogs'));
    }
}
