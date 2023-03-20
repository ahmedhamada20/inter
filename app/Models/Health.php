<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
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
        return $this->image != null ? asset('upload/healths/' . $this->image) : null;
    }
}
