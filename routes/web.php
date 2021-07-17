<?php

use App\Http\Controllers\PostController;
use App\Model\Post;
use Illuminate\Support\Facades\Route;

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

/*Route::group(['prefix' => 'Dashboard', 'middleware' => 'auth' , 'namespace' => 'Admin'], function () {
    Route::get('/' , 'DashboardController@index')->name('Dashboard');
});*/
Route::get('/', 'PostController@index')->name('Post.index');

//Route::get('/' , 'DashboardController@index')->name('Dashboard');

/*
Route::group(['prefix' => 'Dashboard', 'middleware' => 'auth' ], function () {
});*/


/*Route::get('/','Dashboard',function () {
    return view('Dashboard');
})->middleware(['auth'])->name('Dashboard');

Route::get('Dashboard','DashboardController');
*/


Route::group(['prefix' => 'Post'], function () {
    Route::get('/', 'PostController@index')->name('Post.index');
    Route::get('create/','PostController@create')->name('Post.create');
    Route::post('/','PostController@store')->name('Post.store');

    Route::group(['prefix' => '{Post}'], function () {
    Route::get('/show','PostController@show')->name('Post.show');
    Route::get('/edit','PostController@edit')->name('Post.edit');
    Route::patch('/','Postcontroller@update')->name('Post.update');
    Route::get('/delete','PostController@delete')->name('Post.delete');
    Route::delete('/','PostController@destroy')->name('Post.destroy');
    });


});
 require __DIR__.'/auth.php';