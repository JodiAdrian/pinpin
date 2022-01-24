<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $table = 'employment';
    protected $fillable = [
        'user_id', 'office_name', 'office_address',
        'length_of_work', 'total_income', 'total_expenditure',
        'net_income', 'job_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
