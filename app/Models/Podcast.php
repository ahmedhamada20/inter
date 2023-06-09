<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'notes',
        'image',
        'url',
       
    ];


    protected $appends  = ['photo'];

    public function getPhotoAttribute()
    {
        return $this->image != null ? asset('upload/podcasts/' . $this->image) : null;
    }
}
