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

Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/{any}', [App\Http\Controllers\HomeController::class, 'index'])->where('any', '.*');

//Route::get('/post/{id}/{name}/{password}', [App\Http\Controllers\PostsController::class, 'show_post']);

// 回傳修改會員資料介面
Route::get('/modify/user', [App\Http\Controllers\Auth\UserController::class, 'modifyUser'])->name('modify.user');

// 修改一筆會員資料
Route::post('/modify/user', [App\Http\Controllers\Auth\UserController::class, 'modifyUserData'])->name('modify.user.data');

// 回傳修改會員密碼介面
Route::get('/modify/user/pwd', [App\Http\Controllers\Auth\UserController::class, 'modifyUserPwd'])->name('modify.user.pwd');

// 修改一筆會員密碼
Route::post('/modify/user/pwd', [App\Http\Controllers\Auth\UserController::class, 'modifyUserPwdData'])->name('modify.user.pwd.data');

// 回傳刪除會員帳號介面
Route::get('/delete/user',  [App\Http\Controllers\Auth\UserController::class, 'deleteUser'])->name('delete.user');

// 刪除一筆會員資料
Route::post('/delete/user',  [App\Http\Controllers\Auth\UserController::class, 'deleteUserData'])->name('delete.user.data');
