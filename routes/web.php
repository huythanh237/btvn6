<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController.php;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;
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

Route::get('/create', function () {
    $user = new User([
        'name' => 'Huy Thanh',
        'email' => 'huyxmen237@gmail.com',
        'password' => Hash::make('123456')
    ]);
    $post->save();

Route::get('read/{id}', function ($id) {
    $user = User::FindOrFail($id)->First();
    dd($user);
});

Route::get('update/{id}', function ($id) {
    User::query()->find($id)->update(['email' => 'huythanh237@gmail.com']);
});

Route::get('delete/{id}', function ($id) {
    $user = User::query()->FindOrFail($id);
    $user->delete();
});






// Route::get( '/demo', [HomeController::class, 'index']);
Route::get( '/home', [DemoController::class, 'index']);
// Route::get('welcome', 'WelcomeController@index');
Route::get('/demo',[HomeController::class, 'index']);

Route::get('/profile/{id}', TestController::class);

