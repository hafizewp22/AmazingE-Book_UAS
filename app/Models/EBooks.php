<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EBooks extends Model
{
    use HasFactory;

    protected $table = 'e_books';

    protected $fillable = [
        'title',
        'author',
        'description',
    ];
}
