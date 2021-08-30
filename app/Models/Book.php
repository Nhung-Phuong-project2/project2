<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Connection;


class Book extends Model
{
    use HasFactory;
    protected $table = 'book';
    protected $fillable =[
        'name',
        'details',
    ];
} 


