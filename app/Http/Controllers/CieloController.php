<?php

namespace App\Http\Controllers;

use App\Services\Checkout;
use App\Services\PaymentProviders\Interfaces\PaymentProviderContract;
use Illuminate\Http\Request;

class CieloController extends Controller
{
    public function __construct(private PaymentProviderContract $paymentProvider)
    {}

    public function index()
    {
        $checkout = new Checkout('gui@email.com', 456);

        // continuação do fluxo de pagamento no Brasil

        return $checkout->handle($this->paymentProvider);
    }
}
