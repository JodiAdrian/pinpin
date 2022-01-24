<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHistory extends Model
{
    use HasFactory;

    protected $table = 'transaction_history';
    protected $fillable = [
        'user_id','collateral_id', 'city',
        'product', 'credit_amount', 'tenor',
        'type_tenor', 'borrow_date', 'approved_date',
        'due_date', 'loan_interest', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function collateral_transaksi()
    {
        return $this->belongsTo(Collateral::class, 'collateral_id', 'id');
    }
}
