<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });

//to get front view
Route::get("/",[TemplateController::class,"index"]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/insertRead', function(){
    return view('insertRead');
});

Route::middleware('auth')->group(function () {
    Route::get('/index', [AdminController::class, 'index'])->name('FrontEnd.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth','is_admin')->group(function(){
    Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
});

require __DIR__.'/auth.php';

//Insert data
// Route::get('/',function(){
//    return view ('crud');
// });
// Route::view('crud','insertRead');
//used post since image is passed
Route::post('insertData',[ProductController::class,'insert']);
Route::get('productDisplay',[ProductController::class,'display']);

//Read data
Route::get('crud',[ProductController::class,'readdata']);

//to check the view and now it is commented as it is shown through function from controller
// Route::view('update','updateView');

//Update and Delete data
Route::get('updatedelete',[ProductController::class, 'updateordelete']);

Route::get('updateData',[ProductController::class, 'update']);







