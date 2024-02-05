<?php

use App\Http\Controllers\detailbukuController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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
    return view('sesi/login');
}); 

// Route::get('/index', [detailbukuController::class, 'limiDataTopViews'])->name('top-view');
    

Route::get('/index', function () {
    return view('index');
});

Route::get('/signup', function () {
    return view('signup');
});
Route::get('/categories', function () {
    return view('categories');
});
// Route::get('/deskripsi', function () {
//     return view('anime-details');
// });
Route::get('/blog', function () {
    return view('blog');
});
// Route::get('/auth', @)

Route::get('/deskripsi/{id}', [detailbukuController::class, 'detailBuku'])->name('detail-buku');
Route::post('/', [SessionController::class, 'login']);

