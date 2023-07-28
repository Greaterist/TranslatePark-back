<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class word_comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'language_id',
        'creator_id',
        'word_id',
    ];
}
