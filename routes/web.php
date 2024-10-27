<?php

use App\Http\Controllers\UsersC;
use Illuminate\Support\Facades\Route;

// Route::get('dashboard', function () {
//     return view('test');
// });

Route::get('dashboard', function () {
    return view('test');
})->name('dashboard');

Route::resource('users', UsersC::class);
Route::get('users/create', [UsersC::class, 'create'])->name('users.create');
