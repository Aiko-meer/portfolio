<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutmeController;
use App\Http\Controllers\qualificationController;
use App\Http\Controllers\expeirenceController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\workController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\socialController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\forgetController;

use App\Models\Home;
use App\Models\Aboutinfo;
use App\Models\Award;
use App\Models\Education;
use App\Models\skills_cateory;
use App\Models\Skill;
use App\Models\service;
use App\Models\homeimage;
use App\Models\social;
use App\Models\work;
use App\Models\client;
use App\Models\contact;

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
    $homes = Home::all();
    $aboutme = Aboutinfo::all();
    $achiev= Award::all();
    $education = Education::all();
    $category = skills_cateory::all();
    $skill = Skill::all();
    $service = service::all();
    $social = social::all();
    $image = homeimage::all();
    $work = work::all();
    $client = client::all();
    $contact = contact::all();
        
    return view('landingpage.index', [

                'homes' => $homes,
                'achiev' => $achiev,
                'aboutme' => $aboutme,
                'education' =>$education,
                'category' =>$category,
                'skill' =>$skill,
                'image' =>$image,
                'social' =>$social,
                'work' =>$work,
                'client' =>$client,
                'contact' =>$contact,
                'service' =>$service
    ]);
});

Route::get('/admin', [homeController::class, 'index'])->name('admin.index');
Route::get('/resume', [homeController::class, 'resume'])->name('home.resume');
Route::put('/admin/update/{id}/', [homeController::class, 'update'])->name('home.update');
Route::post('/admin/upload/{id}/update', [homeController::class, 'upload'])->name('home.upload');

// about section
Route::put('/about/update/{id}/info', [aboutmeController::class, 'update_info'])->name('about.info');
Route::post('/about/update/image/{id}', [aboutmeController::class, 'update_image'])->name('about.image');
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

// social
Route::get('/social', [socialController::class, 'index'])->name('social.index');
Route::get('/social/site/{site}/{link}', [socialController::class, 'site'])->name('social.site');
Route::post('/social/add', [socialController::class, 'add'])->name('social.add');
Route::put('/social/{id}/update', [socialController::class, 'update'])->name('social.update');
Route::delete('/social/{id}/delete', [socialController::class, 'Destroy'])->name('social.delete');

// work
Route::get('/work', [workController::class, 'index'])->name('work.index');
Route::post('/work/post', [workController::class, 'add'])->name('work.add');
Route::put('/work/{id}/updtae', [workController::class, 'update'])->name('work.update');

// service
Route::get('/service', [serviceController::class, 'index'])->name('service.index');
Route::post('/service/add', [serviceController::class, 'add'])->name('service.add');
Route::put('/service/{id}/update', [serviceController::class, 'update'])->name('service.update');
Route::delete('/service/{id}/delete', [serviceController::class, 'Destroy'])->name('service.delete');

// contact
Route::put('/contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');

// client
Route::get('/client', [clientController::class, 'index'])->name('client.index');
Route::post('/client/post', [clientController::class, 'create'])->name('client.add');
Route::put('/client/{id}/update', [clientController::class, 'update'])->name('client.update');

// login
Route::get('/login', [loginController::class, 'index'])->name('login.index');
Route::post('/login/auth', [AuthController::class, 'login'])->name('login.auth');
Route::post('/login/reg', [AuthController::class, 'reg'])->name('login.reg');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// forgetpass
Route::get('/forget', [forgetController::class, 'index'])->name('forget.index');
Route::post('/forget/confirm', [forgetController::class, 'auth'])->name('forget.auth');
// otp code
Route::get('/otp code', [forgetController::class, 'otp'])->name('otp.index');
Route::get('/otp/verify', [forgetController::class, 'verify'])->name('otp.verify');
Route::post('/otp/verify/check', [forgetController::class, 'verifyotp'])->name('otp.verifyotp');
// change pass
Route::get('/changepass', [forgetController::class, 'changepass'])->name('changepass.index');
Route::post('/changepass/savepass', [forgetController::class, 'savepass'])->name('changepass.save');