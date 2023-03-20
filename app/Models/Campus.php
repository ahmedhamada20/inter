<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'notes',
        'image',
       
    ];

    protected $appends  = ['photo'];

    public function getPhotoAttribute()
    {
        return $this->image != null ? asset('upload/campus/' . $this->image) : null;
    }
}
