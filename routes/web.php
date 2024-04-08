<?php

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

Route::get('/', function () {
    $navLinks = config("db.navLinks");
    $comics = config("db.comics");
    $iconLinks = config("db.iconLinks");
    $footerLinks = config("db.footerLinks");

    // dd($footerLinks);

    return view('home', compact('navLinks', 'comics', 'iconLinks', 'footerLinks'));
})->name('home');

Route::get('comicsDescription', function() {
    $navLinks = config("db.navLinks");


    return view('comicsDescription', compact('navLinks'));
})->name('comicsDescription');
