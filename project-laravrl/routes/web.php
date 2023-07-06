<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','admin']],function () {
// ...............................admin
 Route::get('/master', [App\Http\Controllers\CategoryController::class, 'master'])->name('admin.mster');
// ...............................caregory
Route::get('/index', [App\Http\Controllers\CategoryController::class, 'index'])->name('admin.index');
Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('admin.create');
Route::post('/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('admin.store');
Route::get('/edit{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('admin.edit');
Route::put('/update{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('admin.update');
Route::delete('/delete{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('admin.delete');
Route::get('/trshedc', [App\Http\Controllers\CategoryController::class, 'trashedc'])->name('admin.trashed');
Route::get('/restorec{id}', [App\Http\Controllers\CategoryController::class, 'backdelc'])->name('admin.restore');
Route::get('/hdeletec{id}', [App\Http\Controllers\CategoryController::class, 'hdeletec'])->name('admin.hdelete');
// ..................................orders
Route::get('/orderindex', [App\Http\Controllers\OrderController::class, 'index'])->name('adminorder.index');
Route::post('/order/stuatas/{order}', [App\Http\Controllers\OrderController::class, 'changeStuatas'])->name('adminorder.changeStuatas');
Route::get('/order/edit/{order}', [App\Http\Controllers\OrderController::class, 'edit'])->name('adminorder.edit');
Route::put('/order/uodate/{order}', [App\Http\Controllers\OrderController::class, 'update'])->name('adminorder.update');
Route::delete('/delete', [App\Http\Controllers\OrderController::class, 'destroy'])->name('adminorder.delete');

// ..................................meals
Route::get('/meal', [App\Http\Controllers\MealController::class, 'index'])->name('adminmeal.index');
Route::get('/mealcreate', [App\Http\Controllers\MealController::class, 'create'])->name('adminmeal.create');
Route::post('/mealstore', [App\Http\Controllers\MealController::class, 'store'])->name('adminmeal.store');
Route::get('/mealedit{meal}', [App\Http\Controllers\MealController::class, 'edit'])->name('adminmeal.edit');
Route::put('/mealupdate{meal}', [App\Http\Controllers\MealController::class, 'update'])->name('adminmeal.update');
Route::get('/mealdestroy{meal}', [App\Http\Controllers\MealController::class, 'destroy'])->name('adminmeal.destroy');
Route::get('/mealtrshed', [App\Http\Controllers\MealController::class, 'trashed'])->name('adminmeal.trshed');
Route::get('/mealrestore{id}', [App\Http\Controllers\MealController::class, 'backdel'])->name('adminmeal.restore');
Route::get('/mealhdelete{id}', [App\Http\Controllers\MealController::class, 'hdelete'])->name('adminmeal.hdelete');


});
// .................................homepage
Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage.indexhome');
Route::get('/homepageshow{meal}', [App\Http\Controllers\HomepageController::class, 'show'])->name('homepage.show');
Route::get('/homeorder/{meal}', [App\Http\Controllers\HomepageController::class, 'order'])->name('home.order');
Route::post('/order/store', [App\Http\Controllers\OrderController::class, 'store'])->name('adminorder.store');
// Route::get('/homee', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage.indexhome');

