<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaypalController;
use App\Http\Controllers\StripeController;

Route::get('/', function () {
    return view('welcome');
});

/* PayPal */
Route::post('paypal/payment', [PaypalController::class, 'payment'])->name('paypal');
Route::get('paypal/success', [PaypalController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaypalController::class, 'cancel'])->name('paypal_cancel');

/* Stripe */
Route::post('stripe/payment', [StripeController::class, 'payment'])->name('stripe');
Route::get('stripe/success', [StripeController::class, 'success'])->name('stripe_success');
Route::get('stripe/cancel', [StripeController::class, 'cancel'])->name('stripe_cancel');
