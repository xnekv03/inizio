<?php


use App\Http\Controllers\AresController;
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
})->name('search');

Route::get('/paginate', function () {
    return view('partials.paginate')->with(['records'=> Ares::orderBy('created_at','desc')->paginate(3)]);
})->name('paginate');


//Route::post('/ares', [AresController::class, 'fetch'])->name('ares.post');
Route::post('/ares', [AresController::class, 'fetch']);
//Route::post('/save', [AresController::class, 'save'])->name('ares.save');