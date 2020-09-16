<?php
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\postController;

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
Route::get('showall', 'postController@showall')->name("show_all")->middleware('auth');
Route::get('show_ur_posts', 'postController@show_ur_posts')->name("show_ur_posts")->middleware('auth');
Route::resource('posts', 'postController')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
