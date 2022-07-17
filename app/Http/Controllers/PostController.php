<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Topic;

use Illuminate\Http\Request;

class PostController extends Controller
{
   //load welcome page
    public function index()
    {
    $posts = Post::with('topic')->get();
    return view('welcome',compact('posts'));
    }

    // load data
    public function create()
    {
        $topics = Topic::all();
        return view('posts.create', compact('topics'));
    }

    //store data for database
    public function store(Request $request)
    {
        $input = $request->all();

        Post::create($input);
        return redirect('/')->with('Msg', 'Record Created Successfully');
    }

    // get ald data for edit table
    public function edit($post)
    {
        $topics = Topic::all();
        $post = Post::find($post);
        return view('posts.edit', compact('post','topics'));
    }

    //update data posts table
    public function update(Request $request,$post)
    {
        $input = $request->all();

        $post = Post::find($post);
        $post -> body = $input['body'];
        $post -> topic_id = $input['topic_id'];
       
        $post ->save();
        return redirect('/')->with('Msg', 'Record Update Successfully');
    }

    //delete data posts table
    public function delete($post)
    {
        Post::find($post)->delete();
        return redirect()->back();
    }
}
