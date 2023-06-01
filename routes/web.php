<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestbookController;

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
    return view('home');
})->name('home');

Route::get('/guestbook-reset', function () {
    request()->session()->flush();
    return redirect()->route('guestbook.view');
})->name('guestbook.reset');

Route::get('/guestbook-create', [GuestbookController::class, 'showForm'])->name('guestbook.form');
Route::get('/guestbook-view', [GuestbookController::class, 'viewGuestbook'])->name('guestbook.view');
Route::post('/guestbook', [GuestbookController::class, 'submitForm'])->name('guestbook.submit');
Route::get('/guestbook-result', [GuestbookController::class, 'viewGuestbookResult'])->name('guestbook.result');
