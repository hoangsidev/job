<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


//  Backend
Route::get('/admin/posts', 'PostController@getPosts');
Route::get('/admin/posts/create', function () {
    return view('backend/posts/create');
});
Route::post('/admin/posts/create', 'PostController@createPost');
Route::get('/admin/posts/{id}/edit', 'PostController@editPost');
Route::put('/admin/posts/{id}/update', 'PostController@updatePost');
Route::delete('/admin/posts/{id}/delete', 'PostController@deletePost');
//end posts

Route::get('/admin/categories', 'CategoryController@getCategories');

Route::get('/admin/categories/create', function () {
    return view('backend/categories/create');
});
Route::post('/admin/categories/create', 'CategoryController@createCategory');
//end categories

Route::get('/admin/users', 'UserController@getUsers');
// Route::get('/admin/users/{id}', 'UserController@getUser');
Route::get('/admin/users/create', function () {
    return view('backend/users/create');
});
Route::post('/admin/users/create', 'UserController@createUser');
//end users


// End backend


// Frontend


// End Frontend