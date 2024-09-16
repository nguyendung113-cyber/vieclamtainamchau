<?php

use App\Http\Controllers\HomeHR;
use App\Http\Controllers\HR\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HR\Auth\RegisteredUserController;
use App\Http\Controllers\HR\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:HR')->prefix('HR')->name('HR.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware(['auth:HR'])->prefix('HR')->name('HR.')->group(function () {
    Route::get('/index', function () {
        return view('HR.dashboard');
    })->middleware(['verified'])->name('index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dangtin', [HomeHR::class, 'dangtin'])->name('dangtin');
    Route::get('/danhsachdangtin', [HomeHR::class, 'danhsachdangtin'])->name('danhsachdangtin');
    Route::get('/hosoungvien', [HomeHR::class, 'hosoungvien'])->name('hosoungvien');
    Route::get('/hosodaluu', [HomeHR::class, 'hosodaluu'])->name('hosodaluu');
    Route::get('/timungvien', [HomeHR::class, 'timungvien'])->name('timungvien');
    Route::get('/thanhtoan', [HomeHR::class, 'thanhtoan'])->name('thanhtoan');
    Route::get('/lichsu', [HomeHR::class, 'lichsu'])->name('lichsu');
    Route::get('/taikhoanntd', [HomeHR::class, 'taikhoanntd'])->name('taikhoanntd');
    Route::get('/thuonghieuntd', [HomeHR::class, 'thuonghieuntd'])->name('thuonghieuntd');
    Route::get('/thongbao', [HomeHR::class, 'thongbao'])->name('thongbao');
    Route::get('/hotro', [HomeHR::class, 'hotro'])->name('hotro');
    Route::post('/insert-nghes', [HomeHR::class, 'insertnghes']);


    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});