<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function allcourses(){
        $courses    =   Course::get();
        return view('admin.all-courses', compact('courses'));
    }
    public function master(){
        $home   =Home::where('id', '>', 0)->first();
        $courses    =   Course::where('category','Masters Degrees')->get();
        return view('master', compact('courses', 'home'));
    }
    public function doctoral(){
        $home   =Home::where('id', '>', 0)->first();
        $courses    =   Course::where('category','Doctoral')->get();
        return view('doctoral', compact('courses', 'home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys   = Category::get();
        return view('admin.add_course', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasfile('image')) {
            $file=$request->image;
            $filename   =time().$file->getClientOriginalname();
            $file-> move('upload/course', $filename);
        }

        Course::create([
            'name'=>$request->name,
            'image'=>$filename,
            'category'=>$request->category,
            'cost'=>$request->cost,
            'short_disc'=>$request->short_disc,
            'full_disc'=>$request->full_disc,
            'week_per_class'=>$request->week_per_class,
            'total_class'=>$request->total_class,
            'total_credit_hour'=>$request->total_credit_hour,
            'address'=>$request->address,
        ]);
        return redirect()->back()->with('message', 'Course Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $home   =Home::where('id', '>', 0)->first();
        $course =   Course::find($id);
        return view('course_view', compact('course', 'home'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorys   = Category::get();
        $edit = Course::find($id);
        return view('admin.edit-course', compact('edit', 'categorys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->hasfile('image')) {
            $file=$request->image;
            $filename   =time().$file->getClientOriginalname();
            $file-> move('upload/course', $filename);
        }

        $edit = Course::find($id);
            $edit->name =   $request->name;
            $edit->image ='public/upload/course'.$filename;
            $edit->category =$request->category;
            $edit->cost =$request->cost;
            $edit->short_disc =$request->short_disc;
            $edit->full_disc =$request->full_disc;
            $edit->week_per_class =$request->week_per_class;
            $edit->total_class =$request->total_class;
            $edit->total_credit_hour =$request->total_credit_hour;
            $edit->address =$request->address;
            $edit->update();
        return redirect('admin/all-courses')->with('message', 'Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edit = Course::find($id);
        $edit ->destroy($id);
        return redirect()->back()->with('message', 'Course Delated Successfully');
    }
}
