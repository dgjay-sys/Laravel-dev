<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'item_code',
        'quantity',
        'status',
        'branch',
        'type',
        'email',
        'user_id',
    ];
}
