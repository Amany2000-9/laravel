<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\PostController;


Route::namespace('Backend')->group(function (){
    Route::get('add_post',[PostController::class,'create']);
    Route::post('add_post/store',[PostController::class,'store'])->name('Posts.store');
    Route::get('/posts',[PostController::class,'index'])->name('Posts.index');
    Route::get('/posts/edit/{id}',[PostController::class,'edit'])->name('Posts.edit');
    Route::post('/posts/update/{id}',[PostController::class,'update'])->name('Posts.update');
    Route::get('/posts/delete/{id}',[PostController::class,'destroy'])->name('Posts.destroy');
});
