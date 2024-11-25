<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->name('users.')->group(function () {
    Route::get('/user', 'index')->name('index'); // untuk menampilkan data
    Route::get('/user/tambah', 'tambah')->name('tambah');
    Route::post('/user/simpan', 'simpan')->name('simpan'); // submit form tambah data
    Route::get('/user/{user}/edit', 'edit')->name('edit');
    Route::patch('/user/{user}/update', 'update')->name('update'); // submit form update data
    Route::delete('/user/{user}/hapus', 'hapus')->name('hapus'); // untuk hapus data
});
