<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    return view('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');






// Route::group(['middleware'=>['auth','isAdmin']],function(){
//     Route::resource('/posts',PostController::class);
    
// });
Route::group(['middleware'=>['auth']],function(){
    Route::resource('/posts',PostController::class);
    Route::get('/posts/{id}/apply',[PostController::class,'apply'])->name('posts.apply');
    Route::post('/posts/{id}/apply',[PostController::class,'apply_store'])->name('posts.apply');
    Route::get('/cv/download/{id}',[PostController::class,'download'])->name('download');

   
    Route::get('/view_more/{id}',[PostController::class,'view_more'])->name('posts.view_more');
    Route::group(['middleware'=>['isAdmin']],function(){
        Route::get('/posts/{id}/application',[PostController::class,'view_users_data'])->name('applications.application_array');
        // Route::get('/home/{id}', [App\Http\Controllers\HomeController::class, 'show_user'])->name('admin');

    });
});
// Route::resource('/users',UserController::class);
