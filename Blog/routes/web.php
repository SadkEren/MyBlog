<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/index',[IndexController::class,'index'])->name('index');
Route::get('/',[IndexController::class,'index'])->name('index');

Route::get('/page.addPost',[IndexController::class,'addPost'])->middleware('auth','verified')->name('addPost');
Route::post('addPostSend',[IndexController::class,'addPostSend'])->middleware('auth')->name('addPostSend');

Route::get('/showPost/{id}',[IndexController::class,'showPost'])->name('showPost');

Route::get('/page/about',[IndexController::class,'about'])->name('about');
Route::get('/page/contact',[IndexController::class,'contact'])->name('contact');


//Admin
Route::get('/admin', function(){
    return view('admin.index');
})->middleware('auth', 'verified')->name('index');

Route::get('/admin/posts',[AdminController::class,'postShow'])->middleware('auth','verified')->name('postShow');
Route::get('/admin/contactAbout',[AdminController::class,'contactAbout'])->middleware('auth','verified')->name('contactAbout');

Route::get('/admin/addContact', function(){
    return view('admin.addContact');
})->middleware('auth', 'verified')->name('addContact');

Route::get('/admin/addAbout', function(){
    return view('admin.addAbout');
})->middleware('auth', 'verified')->name('addAbout');


Route::post('/admin/addAboutnew2',[AdminController::class,'addAboutnew2'])->middleware('auth')->name('addAboutnew2');
Route::post('/admin/addContactNew',[AdminController::class,'addContactNew'])->middleware('auth')->name('addContactNew');

Route::get('admin/aboutEditGet/{id}',[AdminController::class,'aboutEditGet'])->middleware('auth')->name('admin/aboutEditGet');
Route::get('admin/aboutDelete/{id}',[AdminController::class,'aboutDelete'])->middleware('auth')->name('admin/aboutDelete');

Route::post('/admin/addAboutSettingEdit/{id}',[AdminController::class,'addAboutSettingEdit'])->middleware('auth')->name('addAboutSettingEdit');
Route::post('/admin/addAboutEdit/{id}',[AdminController::class,'addAboutEdit'])->middleware('auth')->name('addAboutEdit');
Route::get('deleteImage/{id}',[AdminController::class,'deleteImage'])->middleware('auth')->name('deleteImage');
Route::get('admin/aboutDelete/{id}',[AdminController::class,'aboutDelete'])->middleware('auth')->name('aboutDelete');