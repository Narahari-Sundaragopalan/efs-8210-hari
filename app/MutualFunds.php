<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MutualFunds extends Model
{
    //
    protected $fillable = [
        'customer_id',
        'code',
        'scheme_plan',
        'balance_amount',
        'acquired_date',
        'investment_amount',
        'current_value',
        'recent_date',
        'nominee',
    ];

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
