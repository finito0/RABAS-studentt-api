<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttrUserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

Route::get('/users', [AttrUserController::class, 'index'])->name('user.index');
Route::get('/users/create', [AttrUserController::class, 'create'])->name('user.create');
Route::post('/users', [AttrUserController::class, 'store'])->name('user.store');
Route::get('/users/{user}/edit', [AttrUserController::class, 'edit'])->name('user.edit');
Route::put('/users/{user}', [AttrUserController::class, 'update'])->name('user.update');
Route::delete('/users/{user}', [AttrUserController::class, 'destroy'])->name('user.destroy');


?>