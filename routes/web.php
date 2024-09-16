<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', [Home::class, 'index'])->name('index');

Route::get('dangtin', [Home::class, 'dangtin'])->name('dangtin');
Route::get('dichvu', [Home::class, 'dichvu'])->name('dichvu');
Route::get('tintuc', [Home::class, 'tintuc'])->name('tintuc');
Route::get('chitiettintuc', [Home::class, 'chitiettintuc'])->name('chitiettintuc');
Route::get('chitietdichvu', [Home::class, 'chitietdichvu'])->name('chitietdichvu');
Route::get('lienhe', [Home::class, 'lienhe'])->name('lienhe');
Route::get('quydinhdangtin', [Home::class, 'quydinhdangtin'])->name('quydinhdangtin');
Route::get('huongdandangtin', [Home::class, 'huongdandangtin'])->name('huongdandangtin');
Route::get('info', [Home::class, 'info'])->name('info');
Route::get('price', [Home::class, 'price'])->name('price');
Route::get('lienhe', [Home::class, 'lienhe'])->name('lienhe');
Route::get('gopy', [Home::class, 'gopy'])->name('gopy');
Route::get('cauhoi', [Home::class, 'cauhoi'])->name('cauhoi');
Route::get('cauhoithuonggap', [Home::class, 'cauhoithuonggap'])->name('cauhoithuonggap');
Route::get('detailpage/{id}', [Home::class, 'detailpage']);
Route::get('duhocnghe/{id_quocgia}', [Home::class, 'duhocnghe']);
Route::get('xuatkhaulaodong/{id_quocgia}', [Home::class, 'xuatkhaulaodong']);
Route::get('vieclam/{id_quocgia}', [Home::class, 'vieclam']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/HR-auth.php';