<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Video;
use App\Models\Tag;
use App\Models\Taggable;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/create', function(){
//     // $post = Post::create(['name'=>'My first post']);
//     // $tag1 = Tag::create(['name'=>'first tag']);
//     // $post->tags()->save($tag1);
//     // $video = Video::create(['name'=>'video.mov']);
//     $video = Video::findOrFail(2);
//     $video->name = "second.mov";
//     $tag2 = Tag::create(['name'=>'third tag']);
//     $video->tags()->save($tag2);
// });

Route::get('/read', function(){
    $post = Post::findOrFail(4);
    foreach($post->tags as $tag)
    {
        dd($tag);
    }
    
});

// Route::get('/update', function(){
//     $post = Post::findOrFail(6);
//     foreach($post->tags as $tag)
//     {
//         $tag->whereName('first tag')->update(['name'=>'updated tag']);
//         return $tag;
//     }
// });

// Route::get('/delete', function(){
//     $post = Post::findOrFail(6);
//     foreach($post->tags as $tag)
//     {
//         $tag->delete();
//         return $post;
//     }
// });