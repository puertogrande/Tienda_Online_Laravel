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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoriesController@getAll')->name('categories');
Route::get('/newCategoryForm', 'CategoriesController@newCategoryForm')->name('categoryCreate')->middleware('auth');
Route::post('/newCategory', 'CategoriesController@introduceCategory')->name('newCategory')->middleware('auth');
Route::get('/newProductForm/{categoryId}', 'ProductsController@newProductForm')->middleware('auth');
Route::post('/newProduct', 'ProductsController@introduceProduct')->name('newProduct')->middleware('auth');
Route::get('/showcategory/{categoryId}', 'CategoriesController@getShow');
Route::get('/allProducts', 'ProductsController@getAllProducts'); 
Route::get('/blog', 'PostsController@getAllPosts'); 
Route::get('/newBlogForm', 'PostsController@newPostForm')->middleware('auth'); 
Route::post('/newPost', 'PostsController@introducePost')->name('newPost');

