<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'user_id',
        'address',
        'repair_type',
        'payment_type',
        'repair_date',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}