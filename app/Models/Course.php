<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CoursesController;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'category',
        'cost',
        'short_disc',
        'full_disc',
        'week_per_class',
        'total_class',
        'total_credit_hour',
        'address',
        'status',
    ];

}
