<?php

use App\Facades\Stripe;
use App\Http\Controllers\CieloController;
use App\Http\Controllers\StripeController;
use App\Services\Checkout;
use App\Services\PaymentProviders\CieloPaymentProvider;
use App\Services\PaymentProviders\PaddlePaymentProvider;
use App\Services\PaymentProviders\StripePaymentProvider;
use App\Services\Utils\Http;
use App\Services\Utils\ThirdParty;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/learn-container', function() {
    return Stripe::charge('gui@email.com', 456);
});

// Route::get('stripe', [StripeController::class, 'index']);

// Route::get('cielo', [CieloController::class, 'index']);
