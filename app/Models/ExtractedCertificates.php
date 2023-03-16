<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtractedCertificates extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'name_student',
        'url',
    ];
}
