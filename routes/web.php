<?php

use App\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){return view('welcome');});

// This route have created to show all blog posts.
Route::get('/blog',[BlogPostController::class,'index']);

//This route show specific blogs
Route::get('/blog/{blogPost}',[BlogPostController::class,'show']);

//shows create post form
Route::get('/blog/create/post',[BlogPostController::class,'create']);

//saves the created post to database
Route::post('/blog/create/post',[BlogPostController::class,'store']);

//shows edit post form
Route::get('/blog/{blogPost}/edit',[BlogPostController::class,'edit']);

//commits edited post to database
Route::put('/blog/{blogPost}/edit',[BlogPostController::class,'update']);

//delete posts from database
Route::delete('/blog/{blogPost}',[BlogPostController::class,'destroy']);



?>
