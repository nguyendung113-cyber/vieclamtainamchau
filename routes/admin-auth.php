<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\HomeAdmin;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/index', function () {
        return view('admin.layouts.index');
    })->middleware(['verified'])->name('index');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //quan ly thong tin cong ty
    Route::get('/showcongty', [HomeAdmin::class, 'showcongty'])->name('showcongty');
    Route::get('/shownganhnghe', [HomeAdmin::class, 'shownganhnghe'])->name('shownganhnghe');
    Route::get('/shownghes', [HomeAdmin::class, 'shownghes'])->name('shownghes');
    Route::get('/showquocgia', [HomeAdmin::class, 'indexquocgia'])->name('indexquocgia');
    Route::get('/addquocgia', [HomeAdmin::class, 'addquocgia'])->name('addquocgia');
    Route::get('/addnghes', [HomeAdmin::class, 'addnghes'])->name('addnghes');
    Route::get('/addnganhnghe', [HomeAdmin::class, 'addnganhnghe'])->name('addnganhnghe');
    Route::post('/insertnghe', [HomeAdmin::class, 'insertnghe'])->name('insertnghe');
    Route::post('/insert-quocgia', [HomeAdmin::class, 'insertquocgia']);
    Route::post('/insert-nganhnghe', [HomeAdmin::class, 'insertnganhnghe']);
    Route::delete('/destroyquocgia/{id_quocgia}', [HomeAdmin::class, 'destroyquocgia'])->name('destroyquocgia');
    Route::delete('/destroynganhnghe/{id_nganhnghe}', [HomeAdmin::class, 'destroynganhnghe'])->name('destroynganhnghe');
    Route::delete('/destroynghe/{id}', [HomeAdmin::class, 'destroynghe'])->name('destroynghe');
    Route::get('/shownghespending', [HomeAdmin::class, 'shownghespending'])->name('shownghespending');
    Route::get('/shownghesreject', [HomeAdmin::class, 'shownghesreject'])->name('shownghesreject');
    Route::get('/accept_status/{id}', [HomeAdmin::class, 'accept_status'])->name('accept_status');
    Route::get('/reject_status/{id}', [HomeAdmin::class, 'reject_status'])->name('reject_status');
    Route::delete('/destroycongty/{id_congty}', [HomeAdmin::class, 'destroycongty'])->name('destroycongty');
    Route::get('/editquocgia/{id_quocgia}', [HomeAdmin::class, 'editquocgia'])->name('editquocgia');
    Route::put('/updatequocgia', [HomeAdmin::class, 'updatequocgia'])->name('updatequocgia');




    
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
