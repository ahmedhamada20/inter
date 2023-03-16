<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable = [
        'header_image',
        'heading',
        'who_image',
        'who_title',
        'who_disc',
        'why_heading',
        'why_disc',
        'why_image',
        'tab_title_1',
        'tab_disc_1',
        'tab_title_2',
        'tab_disc_2',
        'tab_title_3',
        'tab_disc_3',
        'tab_title_4',
        'tab_disc_4',
        'ask_heading',
        'button_text',
        'button_link',
    ];
    public static function first()
    {
    }
}
