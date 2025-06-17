<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OrderController::class, 'index'])->name('home');


//create  and store
Route::get('/order/create',[OrderController::class, 'create'])->name('order.create');
Route::post('/order/store',[OrderController::class, 'store'])->name('order.store');

//edit and update  
Route::get('/order/edit/{id}',[OrderController::class,'edit'])->name('order.edit');
Route::post('/order/update/{id}',[OrderController::class,'update'])->name('order.update');


// delete 

Route::delete('/order/delete/{id}', [OrderController::class, 'destroy'])->name('order.destory');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
