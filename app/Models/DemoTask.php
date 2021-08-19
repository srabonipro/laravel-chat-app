<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'title', 'order', 'status',
    ];
}
