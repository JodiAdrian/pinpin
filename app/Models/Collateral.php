<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collateral extends Model
{
    use HasFactory;

    protected $table = 'collaterals';
    protected $fillable = [
        'user_id', 'type', 'land_size',
        'land_address', 'land_phone', 'vehicle_type',
        'vehicle_bpkb', 'vehicle_stnk', 'vehicle_number',
        'vehicle_brand', 'vehicle_year', 'certificate_number',
        'employee_office', 'employee_year','valuation_price',
        'market_price', 'notes', 'image', 'owner_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function transaksi_collateral()
    {
        return $this->hasOne(TransactionHistory::class, 'collateral_id');
    }
}