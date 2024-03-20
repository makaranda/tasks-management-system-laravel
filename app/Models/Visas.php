<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visas extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'valid_days',
        'days_type',
        'visa_price',
        'type',
        'visa_type',
        'procesing_time',
        'visa_validity',
        'stay_period',
        'extension',
        'url',
        'status',
    ];


}
