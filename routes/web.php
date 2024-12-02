<?php

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

Route::get('/learn-container', function(StripePaymentProvider $paymentProvider) {
    $checkout = new Checkout('gui@email.com', 456);

    return $checkout->handle($paymentProvider);
});

// Route::get('stripe', [StripeController::class, 'index']);

// Route::get('cielo', [CieloController::class, 'index']);
