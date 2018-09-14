<?php

use App\Comments;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $comments = Comments::all();
    return view('front')->with('comments',$comments);
});

Route::post('/comments','CommentsController@store');
Route::post('/toggle-approve','CommentsController@approval');

Route::get('/admin',function(){

    $comments = Comments::all();
    return view('admin')->with('comments',$comments);


});