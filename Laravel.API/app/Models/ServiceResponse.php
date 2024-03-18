<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceResponse extends Model{

    use HasFactory;

    protected $fillable = [
        'data',
        'success',
        'message',
    ];
}