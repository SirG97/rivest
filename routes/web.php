<?php

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
    return view('welcome');
});

Route::get('/dashboard',[App\Http\Controllers\UserController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::get('/statement', [App\Http\Controllers\AccountController::class, 'statement'])->name('statement');

Route::get('/transfer/local', [App\Http\Controllers\TransactionController::class, 'localTransfer'])->name('transfer.local');
Route::post('/transfer/local', [App\Http\Controllers\TransactionController::class, 'storeLocalTransfer'])->name('transfer.local.store');

Route::get('/transfer/inter-bank', [App\Http\Controllers\TransactionController::class, 'interBankTransfer'])->name('transfer.interbank');
Route::post('/transfer/inter-bank', [App\Http\Controllers\TransactionController::class, 'storeInterBankTransfer'])->name('transfer.interbank.store');

Route::get('/transfer/international', [App\Http\Controllers\TransactionController::class, 'internationalTransfer'])->name('transfer.international');
Route::post('/transfer/international', [App\Http\Controllers\TransactionController::class, 'storeInternationalTransfer'])->name('transfer.international.store');

//Route::get('/otp/email', [App\Http\Controllers\TransactionController::class, 'otpEmail'])->name('otp.email');
Route::post('/otp/email', [App\Http\Controllers\TransactionController::class, 'otpEmailVerify'])->name('otp.email.verify');

//Route::get('/otp/cot', [App\Http\Controllers\TransactionController::class, 'otpCot'])->name('otp.cot');
Route::post('/otp/cot', [App\Http\Controllers\TransactionController::class, 'otpCotVerify'])->name('otp.cot.verify');

Route::get('/otp/tax', [App\Http\Controllers\TransactionController::class, 'otpTax'])->name('otp.tax');
Route::post('/otp/tax', [App\Http\Controllers\TransactionController::class, 'otpTaxVerify'])->name('otp.tax.verify');

Route::get('/otp/tlp', [App\Http\Controllers\TransactionController::class, 'otpTlp'])->name('otp.tlp');
Route::post('/otp/tlp', [App\Http\Controllers\TransactionController::class, 'otpTlpVerify'])->name('otp.tlp.verify');

Route::get('/otp/mlp', [App\Http\Controllers\TransactionController::class, 'otpMlp'])->name('otp.mlp');
Route::post('/otp/mlp', [App\Http\Controllers\TransactionController::class, 'otpMlpVerify'])->name('otp.mlp.verify');

Route::get('/changepassword', [App\Http\Controllers\UserController::class, 'changePassword'])->name('changepassword');
Route::get('/changepin', [App\Http\Controllers\UserController::class, 'changePassword'])->name('changepin');


require __DIR__.'/auth.php';
