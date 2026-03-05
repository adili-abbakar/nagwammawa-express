<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $fillable = [
        'customer_name',
        'email',
        'phone',
        'company_name',
        'pickup_location',
        'destination',
        'weight',
        'service_type',
        'cargo_type',
        'dimension',
        'status',
        'price',
        'pickup_date',
        'delivery_date',
        'special_instructions',
        'special_document',
    ];
}
