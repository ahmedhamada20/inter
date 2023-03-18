<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'notes',
        'image',
        'image_2',
    ];

    protected $appends  = ['photo','smils'];

    public function getPhotoAttribute()
    {
        return $this->image != null ? asset('upload/Slider/' . $this->image) : null;
    }
    public function getSmilsAttribute()
    {
        return $this->image_2 != null ? asset('upload/Slider/' . $this->image_2) : null;
    }
}
