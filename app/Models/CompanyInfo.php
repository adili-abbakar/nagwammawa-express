<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfo extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyInfoFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'trading_name',
        'year_established',
        'vision',
        'mission',
        'contact',
        'head_office'
    ];
}
