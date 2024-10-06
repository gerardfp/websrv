<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'plot', 'poster_url', 'year', 'rating'];
    public $fillable2 = ['title', 'plot', 'poster_url', 'year', 'rating'];
}