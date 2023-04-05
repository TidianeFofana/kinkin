<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        'full-name',
        'email',
        'phone-number',
        'subject',
        'budget',
        'message',
        'file-path'
    ];
}
