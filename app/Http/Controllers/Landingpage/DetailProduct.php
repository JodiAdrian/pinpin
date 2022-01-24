<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class DetailProduct extends Controller
{
    public function render(Request $request, $id)
    {
        $data = [];
        $data['amount'] = $request['amount'] ?? null;
        $data['type_tenor'] = $request['type_tenor'] ?? null;
        $data['tenor'] = $request['tenor'] ?? null;
        $data['city'] = $request['city'] ?? null;
        $data['id'] = $request['id_transaction'] ?? null;
        $transaction = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Core-Banking-Password' => "Cazh2021",
        ])
        ->get("http://staging-cbs.cazh.id/api/product/loan/{$id}");
        $transaction_data = $transaction->json();

        $installment = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Core-Banking-Password' => "Cazh2021",
        ])
        ->post("https://staging-cbs.cazh.id/api/product/detail-installment", [
            'amount' => $data['amount'],
            'tenor' => $data['tenor'],
            'product_id' => $data['id'],
        ]);
        $installment_data = $installment->json();

        return view('landingpage.detail_product', [
            'title' => 'PinCazh'
        ], compact('transaction_data', 'installment_data', 'data'));
    }
}
