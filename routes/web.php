<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/generate/sitemap', function () {
    SitemapGenerator::create('https://photoshoot-wisuda-unj.herokuapp.com/')->writeToFile('sitemap.xml');
});

Auth::routes();


Route::group(['middleware' => 'admin'], function() {
    Route::get('/admin', [adminController::class, 'dashboard']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('pdf', [App\Http\Controllers\HomeController::class, 'pdf'])->name('pdf');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('ubahTanggal', [App\Http\Controllers\HomeController::class, 'ubahTanggal'])->name('ubahTanggal');

});

