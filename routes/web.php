<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
    return "Hello word!";

});

Route::get('/index', [PostController::class, 'dashboard']);

Route::resource('posts', PostController::class);

Route::get('/about', function () {
    return view('about');
    $data = [
        'name' => 'sabilah',
        'email' => '@sabilah',
        'no hp' => '09829381',
    ];
    return "Hello nama saya " . $data['name'] . " dengan email " . $data['email'] . " dan nomor telepon " . $data['no hp'];
});
