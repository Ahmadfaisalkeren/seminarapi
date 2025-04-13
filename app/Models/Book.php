<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'books';
    protected $fillable = [
        'title',
        'author',
        'description',
        'price',
        'stock',
        'image',
    ];
}
