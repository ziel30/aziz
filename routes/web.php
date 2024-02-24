<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/user/{id}', function ($id) {
    return 'user dengan id' . $id;
});

route::prefix('admin')->group(function  () {
route::get('/dashboard', function () {
    return 'admin dashboard';
});
Route::get('/user', function () {
    return 'admin user';
});
});

route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);