<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    use HasFactory;
        protected $fillable = [
            'social_icon_1',
            'social_link_1',
            'social_icon_2',
            'social_link_2',
            'social_icon_3',
            'social_link_3',
            'social_icon_4',
            'social_link_4',
            'phone',
            'mail',
            'slider_image',
            'slider_heading',
            'slider_disc',
            'button_text',
            'button_link',
            'tab_title_1',
            'tab_disc_1',
            'tab_title_2',
            'tab_disc_2',
            'tab_title_3',
            'tab_disc_3',
            'course_heading',
            'course_disc',
            'select_image',
            'select_title',
            'select_disc',
            'select_icon_1',
            'select_heading_1',
            'select_disc_1',
            'select_icon_2',
            'select_heading_2',
            'select_disc_2',
            'form_title',
            'event_heading',
            'event_disc',
        ];

    public static function first()
    {
    }
}
