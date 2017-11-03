<?php

// Index Page
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact')->name('contact'); //
Route::get('services', 'PagesController@getService')->name('pages.service');
Route::get('projects', 'ProjectController@getProjects')->name('projects');

//blog posts
Route::resource('admin/posts', 'PostController');


//Auhtontication
Auth::routes();
Route::get('logout', 'HomeController@error')->name('error');
Route::get('/', 'HomeController@index')->name('home');
Route::get('blog', 'BlogController@userBlog')->name('blog.userBlog');
//blog
Route::get('admin/blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\_\-]+');
Route::get('admin/blog', ['uses'=>'BlogController@getIndex', 'as'=>'blog.index']);

Route::get('/admin', 'ProjectController@index')->name('admin.dashboard');
Route::post('/admin', 'ProjectController@store')->name('projects.store');
Route::delete('admin/{project}',array('uses' => 'ProjectController@destroy', 'as' => 'projects.destroy'));

