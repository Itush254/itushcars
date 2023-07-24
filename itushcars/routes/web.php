<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use Illuminate\Support\Facades\View;

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
// All Routes
Route::get('/', function () {
    return view('listings', [
        'heading' => 'latest listings',
        'listings' => Listing::all()
    ]);
});

//Single Route
Route::get('/listings/{id}', function($id) {
    return View('listing', [
        'listing' => Listing::find($id)
    ]);
});