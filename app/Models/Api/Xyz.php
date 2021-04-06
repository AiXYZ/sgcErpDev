<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xyz extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'name',
    ];
}
