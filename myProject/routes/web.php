<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CrudController;


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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth','is_admin')->group(function(){
    Route::get('/admin',[AdminController::class, 'index'])->name('admin.index');

});

require __DIR__.'/auth.php';

//Insert data
// Route::get('/',function(){
//    return view ('crud');
// });
// Route::view('crud','insertRead');
Route::post('insertData',[CrudController::class,'insert']);

//Read data
Route::get('crud',[CrudController::class,'readdata']);







