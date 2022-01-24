<?php

namespace App\Http\Livewire\Dashboards\Histories;

use App\Models\TransactionHistory;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'detail_history'
    ];

    public function render()
    {
        return view('livewire.dashboards.histories.index')
        ->layout('layouts.dashboards._master', [
            'title' => 'PinCazh'
        ]);
    }

    public function detail_history($user_id)
    {
        return redirect()->route('riwayat.detail', ['id' => $user_id] );
    }
}
