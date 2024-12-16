<?php

use App\Http\Controllers\TicketController;
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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/tiketputih', function () {
    return view('pdf.tiketputih');
});
Route::get('/tiketbiru', function () {
    return view('pdf.tiketbiru');
});


Route::post('/cetak-tiket',[TicketController::class,'handleTiket'])->name('handle.tiket');
