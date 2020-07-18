<?php

Route::redirect('/', '/posts');
Route::redirect('/home', '/posts');
Route::get('/posts', 'PostController@create');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/myPosts', 'PostController@userPosts');
Route::get('/posts/{id}', 'PostController@show')->name('post');
Route::post('/comments', 'CommentController@store');

Mail::to($request->user())->send(new OrderShipped($order));

$receivers = Receiver::pluck('email');
Mail::to($receivers)->send(new EmergencyCallReceived($call));

Auth::routes();

Route::middleware('notif')->group(function () {
    Route::get('/admin', 'Controlador@index')->name('prueba');
 });
 
?>



