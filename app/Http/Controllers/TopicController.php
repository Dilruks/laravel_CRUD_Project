<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Topic;

class TopicController extends Controller
{
    public function index()
    {
    $topics = Topic::all();
    return view('topics.index',compact('topics'));
    }

    //create data topics table
    public function create()
    {
        return view('topics.create');
    }

    //store data for topic table
    public function store(Request $request)
    {
        $input = $request->all();

        Topic::create($input);
        return redirect('/topic')->with('Msg1', 'Record Created Successfully');
    }
}
     
