<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/',[CustomerController::class, 'index'])->name('index');
Route::get('/create',[CustomerController::class, 'create'])->name('usercreate');
Route::post('/store',[CustomerController::class, 'store'])->name('userstore');
Route::get('/{id}/delete',[CustomerController::class, 'delete'])->name('userdelete');
Route::get('/{id}/update',[CustomerController::class, 'update'])->name('userupdate');
Route::post('/{id}/edit',[CustomerController::class, 'edit'])->name('useredit');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';
