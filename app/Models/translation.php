<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class translation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_word_id',
        'second_word_id',
        'status_id',
    ];
}
