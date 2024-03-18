<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceResponse extends Model{

    // use HasFactory;

    public object $data;
    public bool $success = true;
    public string $message;

    public function __construct(object $data, string $message)
    {
        $this->data = $data;
        $this->message = $message;
    }
}