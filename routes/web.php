<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookerController;
use App\Http\Controllers\bookingController;
use App\Http\Controllers\caffe;
use App\Http\Controllers\caffe2controller;
use App\Http\Controllers\CaffeController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PembokingController;
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

//User Dashboard6
Route::get('/', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/booking', [bookingController::class, 'index'])->middleware(['auth', 'verified'])->name('booking');


Route::get('/about', function () {
    return view('about');
})->middleware(['auth', 'verified'])->name('about');

//User Login
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__ . '/auth.php';

//Admin
Route::get('/admin', [AdminController::class, 'main']);
Route::get('/pendaftar', [PendaftarController::class, 'pendaftar']);
Route::get('/pembooking', [BookerController::class, 'pembooking']);
Route::get('/pembooking/form/{id}', [BookerController::class, 'form']);
Route::post('/pembooking/store', [BookerController::class, 'store']);

// Upload caffe
Route::get('/caffes/create', [Caffe2Controller::class, 'create'])->name('caffes.create');
Route::get('/caffes', [Caffe2Controller::class, 'index'])->name('caffes.index');
Route::post('/caffes', [Caffe2Controller::class, 'store'])->name('caffes.store');
Route::get('/caffes/{id}', [Caffe2Controller::class, 'show'])->name('caffes.show');
Route::get('/caffes/{id}/edit', [Caffe2Controller::class, 'edit'])->name('caffes.edit');
Route::put('/caffes/{id}', [Caffe2Controller::class, 'update'])->name('caffes.update');
Route::delete('/caffes/{id}', [Caffe2Controller::class, 'destroy'])->name('caffes.destroy');
Route::get('/admin/caffe', [caffe2controller::class, 'index']);
Route::post('/ain/caffe/upload', [caffe2controller::class, 'store'])->name('caffe.upload');
