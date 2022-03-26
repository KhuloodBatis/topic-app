<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'desc')->get();

       // dd($topics->first()->user);
        return view('topic.index', compact('topics'));
    }

    public function show(Topic $topic)
    {    //this code to show the topic with post
        // $posts = $topic->posts()->get();
        // return view('topic.show', compact('topic','posts'));

        return view('topic.show', compact('topic'));
    }
}
