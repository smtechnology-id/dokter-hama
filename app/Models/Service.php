<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'no_service',
        'customer_name',
        'address',
        'phone',
        'active_ingredient',
        'dosage',
        'usage',
        'note',
        'date',
        'timein',
        'timeout',
        'recomendation_from_client',
        'advice_from_client',
        'ttd_from_admin',
        'ttd_from_client',
    ];
}
