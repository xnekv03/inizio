<?php

use App\Http\Controllers\AresController;
use App\Http\Controllers\RssFeedController;
use App\Models\Ares;
use Illuminate\Support\Facades\Route;

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
    return view('index')->with(['records'=> Ares::orderBy('created_at','desc')->get()]);
})->name('created.desc');

Route::get('/paginate', function () {
    return view('partials.paginate')->with(['records'=> Ares::orderBy('created_at','desc')->paginate(3)]);
})->name('paginate');


Route::get('/detail/{ares}', [AresController::class, 'detail'])->name('ares.detail');
Route::post('/ares', [AresController::class, 'fetch'])->name('ares.getrecord');


Route::get('/namedesc', function () {
    return view('index')->with(['records'=> Ares::orderBy('name','desc')->get()]);
})->name('name.desc');


Route::get('/nameasc', function () {
    return view('index')->with(['records'=> Ares::orderBy('name','asc')->get()]);
})->name('name.asc');


Route::get('/created', function () {
    return view('index')->with(['records'=> Ares::orderBy('created_at','asc')->get()]);
})->name('created.asc');

//RSS

Route::get('/address/{address}', [RssFeedController::class, 'detail'])->name('address.detail');
Route::get('/feed', [RssFeedController::class, 'feed'])->name('rss');


