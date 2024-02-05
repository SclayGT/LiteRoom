<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahBuku extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'thumbnail', 'deskripsi', 'genre', 'link', 'view', 'chapter', 'vote', 'author', 'date', 'status',];
}
