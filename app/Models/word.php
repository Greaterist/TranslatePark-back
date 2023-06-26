<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class word extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_id',
        'word',
        'language_id',
        'phonetic',
        'creator_id',
    ];
}
