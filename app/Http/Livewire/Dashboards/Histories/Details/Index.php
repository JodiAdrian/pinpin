<?php

namespace App\Http\Livewire\Dashboards\Histories\Details;

use App\Models\TransactionHistory;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Index extends Component
{
    public $detail;

    public function mount($id)
    {
        $detail_transaksi = TransactionHistory::with('collateral_transaksi')->findOrFail($id);
        $this->detail = $detail_transaksi;
    }

    public function render()
    {
        $transaction = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Core-Banking-Password' => "Cazh2021",
        ])
        ->post("https://staging-cbs.cazh.id/api/product/detail-installment", [
            'amount' => 1900000,
            'tenor' => 12,
            'product_id' => 1,
        ]);
        $transaction_data = $transaction->json();
        return view('livewire.dashboards.histories.details.index', [
            'personals' => User::with('personal')->findOrFail(auth()->user()->id),
            'transaction_data' => $transaction_data
        ])
        ->layout('layouts.dashboards._master', [
            'title' => 'Pincazh | Detail Transaksi'
        ]);
    }
}
