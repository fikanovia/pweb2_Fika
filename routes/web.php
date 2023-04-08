<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataController;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

// use GuzzleHttp\Promise\Create;

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
    return view('Login.login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/data', [DataController::class, 'index'])->name('Tampildata');
Route::get('/tambah-data', [DataController::class, 'create'])->name('createdata')->middleware('auth');
Route::post('/insert-data', [DataController::class, 'insert'])->name('insertdata')->middleware('auth');
Route::get('/edit-data/{id}', [DataController::class, 'edit'])->name('editdata')->middleware('auth');
Route::post('/update-data/{id}', [DataController::class, 'update'])->name('updatedata');
Route::get('/delete-data/{id}', [DataController::class, 'delete'])->name('deletedata')->middleware('auth');