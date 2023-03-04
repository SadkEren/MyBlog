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
Route::get('admin/aboutDelete/{id}',[AdminController::class,'aboutDelete'])->middleware('auth')->name('aboutDelete');
//aboutImageEdit
Route::get('admin/deleteImage/{id}',[AdminController::class,'deleteImage'])->middleware('auth')->name('deleteImage');
Route::put('/admin/saveNewImage/{id}',[AdminController::class,'saveNewImage'])->middleware('auth')->name('saveNewImage');

Route::get('/admin/contactEditGet/{id}',[AdminController::class,'contactEditGet'])->middleware('auth')->name('contactEditGet');
Route::get('admin/contactDelete/{id}',[AdminController::class,'contactDelete'])->middleware('auth')->name('contactDelete');
Route::post('/admin/contactEdit/{id}',[AdminController::class,'contactEdit'])->middleware('auth')->name('contactEdit');

//Posts
Route::get('/admin/postEditGet/{id}',[AdminController::class,'postEditGet'])->middleware('auth')->name('postEditGet');
Route::post('/admin/postEdit/{id}',[AdminController::class,'postEdit'])->middleware('auth')->name('postEdit');

Route::get('admin/deletePostImage/{id}',[AdminController::class,'deletePostImage'])->middleware('auth')->name('deletePostImage');
Route::put('/admin/saveNewPostImage/{id}',[AdminController::class,'saveNewPostImage'])->middleware('auth')->name('saveNewPostImage');
Route::get('admin/postDelete/{id}',[AdminController::class,'postDelete'])->middleware('auth')->name('postDelete');


