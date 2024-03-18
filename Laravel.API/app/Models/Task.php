<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TaskStatusEnum;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'Id',
        'Title',
        'Description',
        'DateCreated',
        'Status',
    ];

    function set($title, $description){
        $this->title = $title;
        $this->description = $description;
        $this->dateCreated = date('Y-m-d H:i:s');
        $this->status = TaskStatusEnum::PEDING;
    }
}
