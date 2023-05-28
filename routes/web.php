<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});
Route::resource('request',PostController::class);
Route::get('service',[PostController::class,'service'])->name('service');
Route::get('chatrom',[PostController::class,'chatrom'])->name('chatrom');
Route::get('myrequests',[PostController::class,'myrequests'])->name('myrequests');


Route::get('dashboard',[DashController::class,'index'])->name('dashboard');
Route::get('reviews',[DashController::class,'reviews'])->name('reviews');
Route::put('accepte/{id}',[DashController::class,'accepte'])->name('accepte');
Route::put('refuse/{id}',[DashController::class,'refuse'])->name('refuse');
Route::get('posts',[DashController::class,'posts'])->name('posts');
Route::delete('deleteposts/{id}',[DashController::class,'deleteposts'])->name('deleteposts');
Route::get('users',[DashController::class,'users'])->name('users');
Route::delete('deleteusers/{id}',[DashController::class,'deleteusers'])->name('deleteusers');
Route::put('banned/{id}',[DashController::class,'banned'])->name('banned');
Route::put('unbanned/{id}',[DashController::class,'unbanned'])->name('unbanned');
Route::get('comments',[DashController::class,'comments'])->name('comments');

Route::get('profile/{id}',[ProfileController::class,'profile'])->name('profile');
Route::get('profile/edit/{id}',[ProfileController::class,'editprofile'])->name('editprofile');
Route::post('profile/save/{id}',[ProfileController::class,'saveprofile'])->name('saveprofile');
Route::get('skills',[ProfileController::class,'skills'])->name('skills');
Route::post('saveskills',[ProfileController::class,'saveskills'])->name('saveskills');




Auth::routes();

