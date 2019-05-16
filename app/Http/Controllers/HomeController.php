<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function submit(Request $request)
    {
        $payload = \Payment2C2P::paymentRequest([
            'desc' => '1 room for 2 nights',
            'uniqueTransactionCode' => "Invoice".time(),
            'amt' => '1000000',
            'currencyCode' => '702',
            'cardholderName' => 'Card holder Name',
            'cardholderEmail' => 'email@emailcom',
            'panCountry' => 'SG',
            'encCardData' => $request->input('encryptedCardInfo'), // Retrieve encrypted credit card data
            'userDefined1' => 'userDefined1',
            'userDefined2' => 'userDefined2'
        ]);

        return view('submit', compact('payload'));
    }
}
