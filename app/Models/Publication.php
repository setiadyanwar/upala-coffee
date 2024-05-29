<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'short_description',
        'content',
        'times_visited',
    ];

    public $timestamps = true;
}
