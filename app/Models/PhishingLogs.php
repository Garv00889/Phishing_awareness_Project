<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PhishingLogs;

class PhishingLogs extends Model
{
    protected $fillable = [
        'email',
        'password',
        'ip_address',
        'user_agent'
    ];
}