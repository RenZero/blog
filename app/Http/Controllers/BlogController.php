<?php

namespace App\Http\Controllers;

use App\Article;
use App\Myblog;
use Carbon\Carbon;
use Request;
//use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Blog;

class BlogController extends Controller
{
    //
    public function index() {
        $blog = Myblog::all();

        //return $blog;

        //return view('blog.blog', compact('blog'));
        return view('blog.blog')->with('blog', $blog);
    }

    public function show($id) {

        echo $id;

        $blog = Myblog::findOrFail($id);


        return view('blog.show', compact('blog'));
    }

    public function create() {
//        return 'GG';
        return view('blog.create');
    }

    public function store() {
//        $input = Request::all();
        //$input = Request::except('_token'); // Exclude _token attribute
//        $input = Request::get('title');

//        $blog = new Blog;
//        $blog->title = $input['title'];
//        $input['title'] = Request::get('title');
//        $input['body'] = Request::get('body');
//        $input['published_at'] = Carbon::now();

//        Myblog::create(['title' => 'new title3', 'body' => 'new body3', 'published_at' => Carbon::now()]);
//        Myblog::create($input);

        Myblog::create(Request::all());

//        return $input;
        return redirect('blog');
    }
}
