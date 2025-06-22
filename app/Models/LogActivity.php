<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $connection = 'logs';
    protected $fillable = [
        'context',
        'origin_class',
        'origin_function',
        'errors',
        'user_id',
        'ip_address',
        'user_agent',
        'url',
        'url_method',
        'status',
        'data_request',
        'data_response',
    ];

    protected $casts = [
        'data_request' => 'array',
        'data_response' => 'array',
        'message' => 'array',
    ];
}
