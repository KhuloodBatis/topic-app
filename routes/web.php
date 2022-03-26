<?php

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\UserTopicController;

Route::get('/', function (Request $request) {

    // $topic = new Topic;
    // $topic->title = 'Topic kaka';
    // $topic->user()->associate($request->user());
    // $topic->save();

    $topic = Topic::find(1);
    $post = new Post;
    $post->body = 'kool';
    $post->user()->associate($request->user());
    //$post->topic()->associate($topic);
    $topic->posts()->save($post);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/topics', [TopicController::class, 'index']);
Route::get('/topics/{topic}', [TopicController::class, 'show'])->name('topics.show');



//Route::post('/topics/{topic}/posts', [PostController::class, 'store']);


Route::get('/user/topics', [UserTopicController::class, 'index']);
Route::get('/user/posts', [UserPostController::class, 'index']);
