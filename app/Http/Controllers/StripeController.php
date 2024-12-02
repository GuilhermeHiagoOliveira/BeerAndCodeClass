<?php

namespace App\Http\Controllers;

use App\Services\Checkout;
use App\Services\PaymentProviders\Interfaces\PaymentProviderContract;
use App\Services\PaymentProviders\StripePaymentProvider;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function __construct(private PaymentProviderContract $paymentProvider)
    {}

    public function index()
    {
        $checkout = new Checkout('gui@email.com', 456);

        // continuation of the payment flow in the US

        return $checkout->handle($this->paymentProvider);
    }
}
