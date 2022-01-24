<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Product extends Controller
{
    public function render(Request $request)
    {
        $data = [];
        $data['amount'] = $request['amount'] ?? null;
        $data['type_tenor'] = $request['type_tenor'] ?? null;
        $data['tenor'] = $request['tenor'] ?? null;
        $data['city'] = $request['city'] ?? null;
        $transaction = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Core-Banking-Password' => "Cazh2021",
        ])
        ->post("https://staging-cbs.cazh.id/api/product/installment", [
            'amount' => $data['amount'],
            'tenor' => $data['tenor'],
        ]);
        $transaction_data = $transaction->json();

        return view('landingpage.product', [
            'title' => 'PinCazh'
        ], compact('transaction_data', 'data'));
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
    }
}
