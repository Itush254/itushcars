<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class,'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cars', function () {
    return view('cars');
})->middleware(['auth', 'verified'])->name('cars');

Route::get('/booking', function () {
    return view('booking');
})->middleware(['auth', 'verified'])->name('booking');

Route::get('/services', function () {
    return view('services');
})->middleware(['auth', 'verified'])->name('services');

Route::get('/about-us', function () {
    return view('about-us');
})->middleware(['auth', 'verified'])->name('about-us');

Route::get('/news', function () {
    return view('news');
})->middleware(['auth', 'verified'])->name('news');

Route::get('/contact-us', function () {
    return view('contact-us');
})->middleware(['auth', 'verified'])->name('contact-us');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/redirect', [HomeController::class,'redirect']);

Route::get('/view_category', [AdminController::class,'view_category']);

//add category
Route::post('/add_category', [AdminController::class,'add_category']);

//delete category
Route::get('/delete_category/{id}', [AdminController::class,'delete_category']);

//view car category data to load options
Route::get('/view_cars', [AdminController::class,'view_cars']);

//add a car
Route::post('/add_car', [AdminController::class,'add_car']);

//show all cars
Route::get('/show_cars', [AdminController::class,'show_cars']);

//delete car by id
Route::get('/delete_car/{id}', [AdminController::class,'delete_car']);

//get current details for updating
Route::get('/update_car/{id}', [AdminController::class,'update_car']);

//update car details
Route::post('/update_car_confirm/{id}', [AdminController::class,'update_car_confirm']);




require __DIR__.'/auth.php';