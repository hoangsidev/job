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

Route::get('/admin', function () {
    return redirect('/admin/posts?orderBy=created_at&order=DESC');
});


//  Backend
Route::get('/admin/posts', 'PostController@getPosts');
Route::get('/admin/posts/create', 'PostController@formCreatePost');
Route::post('/admin/posts/create', 'PostController@createPost');
Route::get('/admin/posts/{id}/edit', 'PostController@editPost');
Route::put('/admin/posts/{id}/update', 'PostController@updatePost');
Route::delete('/admin/posts/{id}/delete', 'PostController@deletePost');
//end posts

Route::get('/admin/categories', 'CategoryController@getCategories');
Route::get('/admin/categories/create', 'CategoryController@formCreateCategory');
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
Route::get('/register', function () { // cái này để hiện cái fỏm nè
    return view('frontend/users/register'); // chỗ này, vì form tạo mới ko cần dữ liệu từ DB,
    // nên ko cần gọi vào controller, mà gọi thẳng ra giao diện để nó hiện cái form lên
});
Route::post('/register', 'UserController@registerUser'); // còn cái này để tạo nè
// rồi sau khi người ta nhập xong thì gọi vào controller để chèn vào dữ liệu
//End register
Route::get('/login', function () {
    $error = '';
    return view('frontend/users/login', compact('error'));
});
Route::post('/login', 'UserController@loginUser');
//End login

Route::get('/forgetpass', function () {
    return view('frontend/users/forgetpass');
});
Route::post('/forgetpass', 'UserController@forgetpassUser');
//End forget password

Route::get('/information', function () {
    return view('frontend/users/information');
});
Route::get('/information/{id}', 'UserController@informationUser');
Route::put('/information/{id}/update', 'UserController@updateInformation');
//End information

Route::get('/search', function () {
    return view('frontend/posts/search');
});
Route::get('/search', 'PostController@searchPosts');
//End search

Route::get('/detail', function () {
    return view('frontend/posts/detail');
});
Route::get('/detail/{id}', 'PostController@detailPosts');
//End detail

Route::get('/introduce', function () {
    return view('frontend/introduce');
});
//End Introduce




Route::get('/postEmployer', function () {
    return view('frontend/posts/postEmployer');
});
Route::get('/postEmployer', 'PostController@formCreatePostEmployer');
Route::post('/postEmployer', 'PostController@createPostEmployer');
Route::get('/postEmployer/{id}/edit', 'PostController@editPostEmployer');
Route::put('/postEmployer/{id}/update', 'PostController@updatePostEmployer');
Route::delete('/postEmployer/{id}/delete', 'PostController@deletePostEmployer');
//End postEmployer

Route::get('/newspaper', function () {
    return view('frontend/posts/newspaper');
});
//End newspaper
// End Frontend


Route::get('/', 'HomeController@index');
Route::get('/hotCategories', function () {
    return view('/frontend/posts/hotCategories');
});
Route::get('/hotCategories/{id}', 'HomeController@hotCategories');
//Home