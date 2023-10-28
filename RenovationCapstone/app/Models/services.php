<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;

    protected $table = 'services';
        public $timestamps = true;
        protected $fillable = [
            'name',
            'cost_sqft',
            'description',
        ];
}
