<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorites extends Model
{
    use HasFactory;
    protected $table = 'favorites';
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'content_id',
    ];
}
