<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'status',
        'email',
        'phone',
        'total',
        'shipping_address',
        'payment_method',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
