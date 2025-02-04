<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CrudController;
use App\Models\letd;
use App\Models\enhance;
use App\Models\tht;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home'); // Make sure home.blade.php exists in the resources/views folder
})->name('home');

Route::get('/about', function () {
    return view('about'); // about.blade.php
})->name('about');

Route::get('/services', function () {
    $letds = letd::all(); // variable for dbase letd
    $enhances = enhance::all(); // variable for dbase enhance
    $thts = tht::all(); // variable for dbase tht
    return view('services', ['letds' => letd::all()], ['enhances' => enhance::all()], ['thts' => tht::all()]); // services.blade.php
})->name('services');

Route::get('/contact', function () {
    return view('contact'); // contact.blade.php
})->name('contact');

Route::get('/LETD', function () {
    $ITEMS = letd::all(); // variable for dbase letd
    return view('LETD', ['ITEMS' => letd::all()]); // LETD.blade.php
})->name('LETD');

Route::get('/enhance', function () {
    $ITEMS = enhance::all(); // variable for dbase enhance
    return view('enhance', ['ITEMS' => enhance::all()]); // enhance.blade.php
})->name('enhance');

Route::get('/THT', function () {
    $ITEMS = tht::all(); // variable for dbase tht
    return view('THT', ['ITEMS' => tht::all()]); // THT.blade.php
})->name('THT');

Route::get('/crud', [CrudController::class, 'showForm']);
Route::post('crud/createletd', [CrudController::class, 'createletd']);
Route::post('crud/updateletd', [CrudController::class, 'updateletd']);
Route::post('crud/deleteletd', [CrudController::class, 'deleteletd']);
Route::post('crud/createtht', [CrudController::class, 'createtht']);
Route::post('crud/updatetht', [CrudController::class, 'updatetht']);
Route::post('crud/deletetht', [CrudController::class, 'deletetht']);
Route::post('crud/createenhance', [CrudController::class, 'createenhance']);
Route::post('crud/updateenhance', [CrudController::class, 'updateenhance']);
Route::post('crud/deleteenhance', [CrudController::class, 'deleteenhance']);