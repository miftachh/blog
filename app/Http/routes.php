<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', [ 
    'as' => 'home',
    'uses' => 'HomeController@getHome'
]);
  
Route::get('/laravel/', [
    'as' => 'laravel',
    'uses' => 'HomeController@getLaravelTutorial'
]);

Route::get('/codeigniter/', [
    'as' => 'codeigniter',
    'uses' => 'HomeController@getCodeigniterTutorial'
]);

Route::get('/mysql/', [
    'as' => 'mysql',
    'uses' => 'HomeController@getMysqlTutorial'
]);

Route::get('/javascript/', [
    'as' => 'javascript',
    'uses' => 'HomeController@getJavascriptTutorial'
]);


Route::get('/project/{slug}', [
    'as' => 'project',
    'uses' => 'HomeController@ProjectDetail'
]);

Route::get('/php-project', [
    'as' => 'php-project',
    'uses' => 'HomeController@getAllProject'
]);

Route::get('/category/{category_name}', [
    'as' => 'category',
    'uses' => 'HomeController@Category'
]);

Route::get('/tag/{tag_name}', [
    'as' => 'tag',
    'uses' => 'HomeController@Tag'
]);

//search
             
Route::get('/{slug}', [
    'as' => 'slug',
    'uses' => 'HomeController@getSlug'
]);



// account portion

Route::get('account/login', [
    'as' => 'account/login',
    'uses' => 'LoginController@getLogin'
]);

Route::post('account/postlogin', [
    'as' => 'login',
    'uses' => 'LoginController@postLogin'
]);

Route::get('account/logout', [
    'as' => 'account/logout',
    'uses' => 'LoginController@Logout'
]);


Route::get('account/dashboard', [
    'as' => 'account/dashboard',
    'uses' => 'PostController@dashboard'
]);


Route::get('account/post/add-post', [
    'as' => 'account/post/add-post',
    'uses' => 'PostController@addPost'
]);

Route::get('account/post/view-post', [
    'as' => 'account/post/view-post',
    'uses' => 'PostController@viewPost'
]);

Route::get('account/post/filtercategory/{category_id}', [
    'as' => 'account/post/filtercategory',
    'uses' => 'PostController@FilterCategory'
]);


Route::post('account/post/add-post/InsertPost', [
    'as' => 'admin.create.post',
    'uses' => 'PostController@InsertPost'
]);

Route::get('account/post/edit-post/{post_id}', [
    'as' => 'account/post/edi-post',
    'uses' => 'PostController@editPost'
]);

Route::post('account/post/add-post/UpdatePost/{post_id}', [
    'as' => 'account/post/add-post/UpdatePost',
    'uses' => 'PostController@UpdatePost'
]);

Route::get('account/post/delete-post/{post_id}', [
    'as' => 'account/post/delete-post/',
    'uses' => 'PostController@DeletePost'
]);

//category routes

Route::get('account/category/view-add-category', [
    'as' => 'account/category/view-add-category',
    'uses' => 'CategoryTagController@getCategoty'
]);

Route::post('account/category/add-category', [
    'as' => 'account/category/add-category',
    'uses' => 'CategoryTagController@addCategoty'
]);


Route::get('account/category/edit-category/{category_id}', [
    'as' => 'account/category/edit-category',
    'uses' => 'CategoryTagController@editCategoty'
]);

Route::post('account/category/update-category/{category_id}', [
    'as' => 'account/category/update-category',
    'uses' => 'CategoryTagController@updateCategoty'
]);

// Tag routes

Route::get('account/tag/view-add-tag', [
    'as' => 'account/tag/view-add-tag',
    'uses' => 'CategoryTagController@getTag'
]);

Route::post('account/tag/add-tag', [
    'as' => 'account/tag/add-tag',
    'uses' => 'CategoryTagController@addTag'
]);

Route::get('account/tag/edit-tag/{category_id}', [
    'as' => 'account/tag/edit-tag',
    'uses' => 'CategoryTagController@editTag'
]);


Route::post('account/tag/update-tag/{category_id}', [
    'as' => 'account/tag/update-tag',
    'uses' => 'CategoryTagController@updateTag'
]);

//project

Route::get('account/project/add-project', [
    'as' => 'account/project/add-project',
    'uses' => 'ProjectController@addProject'
]);


Route::get('account/project/view-project', [
    'as' => 'account/project/view-project',
    'uses' => 'ProjectController@ViewProject'
]);

Route::post('account/project/insertproject', [
    'as' => 'account/project/insertproject',
    'uses' => 'ProjectController@insertproject'
]);


Route::get('account/project/edit-project/{project_id}', [
    'as' => 'account/project/edit-project',
    'uses' => 'ProjectController@EditProject'
]);

Route::post('account/project/updateproject/{project_id}', [
    'as' => 'account/project/updateproject',
    'uses' => 'ProjectController@UpdateProject'
]); 

