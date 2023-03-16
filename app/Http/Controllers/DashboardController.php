<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\Event;
use App\Models\Home;
use App\Models\Verfy;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function count(){
        $course_model   =   Course::get();
        $course_count   =   $course_model->count();
        $category_model   =   Category::get();
        $category_count   =   $category_model->count();
        $event_model   =   Event::get();
        $event_count   =   $event_model->count();
        $certification  =   Verfy::get()->count();





        return view('admin.dashboard', compact('course_model', 'course_count','category_model', 'category_count', 'event_model', 'event_count', 'certification'));
    }
}
