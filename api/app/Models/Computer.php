<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'computer_name',
        'manufacturer',
        'model',
        'serial_number',
        'operating_system',
        'ram_gb',
        'storage_gb',
        'assigned_user',
        'notes',
    ];
}