<?php

use Facades\App\Services\PaymentProviders\PaddlePaymentProvider;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/learn-container', function() {
    // return Stripe::charge('gui@email.com', 456);

    return PaddlePaymentProvider::charge('gui@email.com', 456);
});

// Route::get('stripe', [StripeController::class, 'index']);

// Route::get('cielo', [CieloController::class, 'index']);
