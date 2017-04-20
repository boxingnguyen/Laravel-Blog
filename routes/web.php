<?php
use App\User;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'PagesController@getIndex');
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::get('/checkDB', function ()
{
	dd(DB::connection()->getDatabaseName());
});

Route::get('/users/create', function () {
	$user = new User;
	$user->firstname= 'Nguyen';
	$user->lastname= 'Quyen Anh';
	$user->username = 'boxingnguyen';
	$user->password = 'boxingdeptrai';
	$user->save();
});
Route::get('name',[
	'middleware' => 'name: editor',
	'uses' => 'TestController@index',
]);

Route::get('/user', function () {
	$data = User::all();
	return $data;
});

Route::get('/articles/create', [
	'as'  => 'article.create', // name of route
	'uses' => 'ArticlesController@create'
]);

Route::post('/articles',[
	'as'    =>  'article.store',
	'uses'  =>  'ArticlesController@store'
]);

Route::get('articles/{id}', [
	'as'    =>  'article.show',
	'uses'  =>  'ArticlesController@show'
]);

Route::get('/articles', [
	'as'    =>  'article.index',
	'uses'  =>  'ArticlesController@index'
]);

