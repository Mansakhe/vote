<?php

use App\Http\Controllers\votentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[votentController::class,'home'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/vote',[votentController::class,'vote'])->name('vote');
    Route::post('/EnregCandidat',[votentController::class,'EnregCandidat'])->name('EnregCandidat');
    Route::post('/Enregevotent/{candidateId}',[votentController::class,'Enregevotent'])->name('Enregevotent');
    
    

});
