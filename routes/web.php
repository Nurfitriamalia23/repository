<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;
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
    return view('datamahasiswa');
});

Auth::routes();

    // Route::get('/mahasiswa', [App\Http\Controllers\EmployeeControler::class, 'index'])->name('mahasiswa'); 

Route::get('mahasiswa', [EmployeeController::class, 'index'])->name('mahasiswa'); 
Route::get('/mahasiswa/create', [EmployeeController::class, 'create'])->name('mahasiswa.create'); 
Route::get('/mahasiswa/show', [EmployeeController::class, 'show'])->name('mahasiswa.show');
Route::get('/mahasiswa/edit', [EmployeeController::class, 'edit'])->name('mahasiswa.edit');
Route::get('/mahasiswa/update', [EmployeeController::class, 'update'])->name('mahasiswa.update');
Route::get('/mahasiswa/delete', [EmployeeController::class, 'delete'])->name('mahasiswa.delete');

//127.0.0.1:8000
Route::resource('mahasiswa', EmployeeController::class);
Route::get('/mahasiswa/read', [EmployeeController::class, 'read'])->name('mahasiswa.read'); 
Route::get('/mahasiswa/create/', [EmployeeController::class, 'create'])->name('mahasiswa.create'); 
Route::get('/mahasiswa/delete/', [EmployeeController::class, 'delete'])->name('mahasiswa.delete'); 
Route::get('/mahasiswa/update/', [EmployeeController::class, 'update'])->name('mahasiswa.update'); 

Auth::routes();

Route::get('/mahasiswa', [App\Http\Controllers\EmployeeController::class, 'index'])->name('mahasiswa');
