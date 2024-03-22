<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutmeController;
use App\Http\Controllers\qualificationController;
use App\Http\Controllers\expeirenceController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\workController;
use App\Http\Controllers\categoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage.index');
});

Route::get('/home', [homeController::class, 'index'])->name('home.index');
Route::post('/home/update', [homeController::class, 'store'])->name('home.store');


// about section
Route::post('/about/update/info', [aboutmeController::class, 'update_info'])->name('about.info');
Route::get('/about/update/achiev', [aboutmeController::class, 'update_achiev'])->name('about.achiev');
Route::put('/about/{award}/update', [aboutmeController::class, 'update_award'])->name('about.award');


// qualification
Route::get('/qualification', [qualificationController::class, 'index'])->name('qualification.index');
Route::post('/qualification/add', [qualificationController::class, 'add'])->name('qualification.add');
Route::put('/qualification/{education}/updates', [qualificationController::class, 'update'])->name('qualification.update');
Route::delete('/qualificationdelete/{id}', [qualificationController::class, 'destroy'])->name('qualification.delete');

// experience
Route::get('/expeirence', [expeirenceController::class, 'index'])->name('expeirence.index');
Route::put('/expeirence/{id}/update', [expeirenceController::class, 'update'])->name('expeirence.update');
Route::post('/expeirence/add', [expeirenceController::class, 'add'])->name('expeirence.add');
Route::delete('/expeirence/delete/{id}', [expeirenceController::class, 'destroy'])->name('expeirence.destroy');

// skills
Route::get('/skill', [skillController::class, 'index'])->name('skill.index');
Route::post('/skill/category', [skillController::class, 'category'])->name('skill.category');
Route::delete('/skill/category/{id}/delete', [skillController::class, 'category_delete'])->name('skill.category.delete');
Route::post('/skill/add', [skillController::class, 'add'])->name('skill.add');
Route::put('/skill/{id}/update', [skillController::class, 'update'])->name('skill.update');
Route::delete('/skill/{id}/delete', [skillController::class, 'Destroy'])->name('skill.delete');

// category 
Route::get('/category', [categoryController::class, 'index'])->name('category.index');
Route::post('/category/add', [categoryController::class, 'add'])->name('category.add');
Route::post('/category/{id}/update', [categoryController::class, 'update'])->name('category.update');

// work
Route::get('/work', [workController::class, 'index'])->name('work.index');