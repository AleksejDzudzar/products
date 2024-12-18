<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 'city', 'street', 'postal_code', 'company', 'company_name', 'pib',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);

    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
