<?php

namespace App\Http\Controllers\Landingpage;

use App\Http\Controllers\Controller;
use App\Models\TransactionHistory;
use Illuminate\Http\Request;

class Index extends Controller
{
    public function render()
    {
        return view('landingpage.index');
    }
}
