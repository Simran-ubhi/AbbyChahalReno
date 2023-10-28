<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contents extends Model
{
    use HasFactory;

    protected $table = 'contents';
    public $timestamps = true;
    protected $fillable = [
        'service_id',
        'image1',
        'image2',
        'image3',
        'image4',
        'description',
        'cost',
    ];
}
