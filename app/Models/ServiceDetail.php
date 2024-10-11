<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'area',
        'sub_area',
        'tp_cf',
        'tp_hf',
        'tp_s',
        'tp_b',
        'tp_lv',
        'tp_t',
        'tp_ot',
        'ai',
        'remark',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
