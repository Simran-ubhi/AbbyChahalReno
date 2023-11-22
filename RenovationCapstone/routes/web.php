<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UserController;




// Storage link

Route::get('/storagelink', function(){
    Artisan::call('storage:link');
});

Route::get('/storageunlink', function(){
    Artisan::call('storage:unlink');
});


//Clear Cache=
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});



// User Controller

Route::get('/',[UserController::class,'welcome'])->name('index');

Route::get('/register',[UserController::class,'registerForm'])->name('registerForm');
Route::any('/registerProc',[UserController::class,'registerUser'])->name('registerUser');

Route::get('/login',[UserController::class,'loginPage'])->name('loginForm');
Route::any('/loginProc',[UserController::class,'login'])->name('login');

Route::any('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');


Route::get('/edit-user/{id}',[UserController::class,'editUser'])->name('editUser');
Route::any('/editing-user/{id}',[UserController::class,'editingUser'])->name('editingUser');


Route::get('/user-update',[UserController::class,'user_Update'])->name('user-Update');
Route::any('/user-updating',[UserController::class,'user_Updating'])->name('user-Updating');


Route::get('/delete-user/{id}',[UserController::class,'deletePage'])->name('delete-user');
Route::any('/deleting-user/{id}',[UserController::Class,'delete'])->name('deleting-user');


Route::get('/profile',[UserController::class,'profile'])->name('profile');




//  Content Controller

Route::get('/our-portfolio',[ContentController::class,'portfolio'])->name('portfolio');
Route::get('/contact-us',function(){
    return view('contact-us');
});



Route::get('/new-content',[ContentController::class,'contentForm'])->name('contentForm');
Route::any('/adding-content',[ContentController::class,'addContent'])->name('addContent');

Route::get('/update-content/{id}',[ContentController::class,'updateForm'])->name('updateForm-content');
Route::any('/updating-content/{id}',[ContentController::class,'updateContent'])->name('updateContent');

Route::get('/delete-content/{id}',[ContentController::class,'deletePage'])->name('content-deletepage');
Route::any('/deleting-content/{id}',[ContentController::class,'deleteContent'])->name('content-delete');

Route::get('/content-details/{id}',[ContentController::class,'contentDetails'])->name('contentDetails');

Route::any('/favorite/{id}',[ContentController::class,'favorite'])->name('favorite');



// Services

Route::get('/new-service',[ServicesController::class,'serviceForm'])->name('serviceForm');
Route::any('/adding-service',[ServicesController::class,'addService'])->name('addService');

Route::get('/update-service/{id}',[ServicesController::class,'updateForm'])->name('updateForm-services');
Route::any('/updating-service/{id}',[ServicesController::class,'update'])->name('update-services');

Route::get('/delete-service/{id}',[ServicesController::class,'deletePage'])->name('delete-service');
Route::any('/deleting-service/{id}',[ServicesController::class,'delete'])->name('deleting-service');



// Estimates
Route::get('/create-estimate',[ServicesController::class,'estimator'])->name('estimator');
Route::any('/creating-estimate',[ServicesController::class,'sendEstimate'])->name('sendEstimate');

Route::get('/delete-estimate-page/{id}',[ServicesController::class,'deleteEstimatePage'])->name('deleteEstimatePage');
Route::any('/deleting-estimate/{id}',[ServicesController::class,'deleteEstimate'])->name('deletingEstimate');

Route::any('/update-status/{id}',[ServicesController::class,'statusUpdate'])->name('statusUpdate');

