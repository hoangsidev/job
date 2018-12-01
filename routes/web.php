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
Route::get('/admin/categories/{id}/edit', 'CategoryController@editCategory');
Route::put('/admin/categories/{id}/update', 'CategoryController@updateCategory');
Route::delete('/admin/categories/{id}/delete', 'CategoryController@deleteCategory');

//end categories

Route::get('/admin/users', 'UserController@getUsers');
// Route::get('/admin/users/{id}', 'UserController@getUser');
Route::get('/admin/users/create', function () {
    return view('backend/users/create');
});
Route::post('/admin/users/create', 'UserController@createUser');
Route::get('/admin/users/{id}/edit', 'UserController@editUser');
Route::put('/admin/users/{id}/update', 'UserController@updateUser');
Route::delete('/admin/users/{id}/delete', 'UserController@deleteUser');
//end users


// End backend


// Frontend


// End Frontend