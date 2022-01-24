<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personals';
    protected $fillable = [
        'user_id','id_number', 'tax_number',
        'account_number', 'name', 'place_of_birth',
        'birth_date', 'gender', 'address',
        'province', 'city', 'districts',
        'postal_code', 'religion', 'no_handphone',
        'image_id', 'tax_image', 'selfie_image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
