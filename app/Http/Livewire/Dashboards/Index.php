<?php

namespace App\Http\Livewire\Dashboards;

use App\Models\TransactionHistory;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboards.index', [
            'all_transaction' => TransactionHistory::all(),
            'transaction_today' => TransactionHistory::where('created_at', '=', now()),
            'transaction_month' => TransactionHistory::where('created_at', '=', date('m')),
            'transaction_year' => TransactionHistory::where('created_at', '=', date('Y')),
        ])
        ->layout('layouts.dashboards._master', [
            'title' => 'PinCazh | Dashboard',
        ]);
    }
}
