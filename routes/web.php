<?php

use App\Http\Controllers\ContohController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bills.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/testController', function () {
    Route::get('test', [ContohController::class, 'test'])->name('test');
})

?>