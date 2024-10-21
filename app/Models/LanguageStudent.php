<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageStudent extends Model
{
    use HasFactory;

    protected $fillable = [
        'language_id',
        'student_id',
    ];
}
