<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'name',
        'notes',
        'futhre_1',
        'futhre_2',
        'futhre_3',
        'futhre_4',
        'futhre_5',
        'futhre_6',
        'futhre_7',
        'futhre_8',
        'number_title_1',
        'number_1',
        'number_title_2',
        'number_2',
        'number_3',
        'number_title_3',
    ];
    protected $appends  = ['photo'];

    public function getPhotoAttribute()
    {
        return $this->image != null ? asset('upload/about/' . $this->image) : null;
    }
}
