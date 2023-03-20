<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = [
        'notes_1',
        'notes_2',
        'image',
        'url',
    ];


    protected $appends  = ['photo'];

    public function getPhotoAttribute()
    {
        return $this->image != null ? asset('upload/admission/' . $this->image) : null;
    }
}
