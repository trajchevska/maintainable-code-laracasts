<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaymentController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/payment', [PaymentController::class, 'show'])->name('payment.show');
    Route::post('/payment/save', [PaymentController::class, 'store'])->name('payment.save');

});

Route::middleware('admin')->group(function () {
    Route::post('/admin/scheduled-payments', [PaymentProcessingController::class, 'getScheduledPayments'])->name('admin.scheduled-payments');
    Route::post('/admin/process-payments', [PaymentProcessingController::class, 'processPayments'])->name('admin.process-payments');
});

require __DIR__.'/auth.php';
