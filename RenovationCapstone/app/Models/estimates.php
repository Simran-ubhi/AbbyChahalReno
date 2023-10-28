<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estimates extends Model
{
    use HasFactory;

    protected $table = 'estimates';
    public $timestamps = true;
    protected $fillable = [
        'client_name',
        'address',
        'service_id',
        'estimated_cost',
        'notes',
        'status',
    ];
}
