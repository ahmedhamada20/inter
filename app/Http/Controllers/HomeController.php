<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ExtractedCertificates;
use App\Models\Course;
use App\Models\Event;
use App\Models\Form;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(){
        $home       =Home::where('id',true)->first();
        $courses    =   Course::get();
        $all_event  =   Event::get();
        $form       =   Form::get();
        return view('front.index', compact('courses','home', 'all_event', 'form'));
    }

    public function index()
    {
        $home   =Home::first();
        return view('admin.pages.admin-home',  compact('home'));
    }
    public function nave()
    {
        $home   =Home::first();
        return view('include.nave',  compact('home'));
    }

    public function allpages(){
        $home   =Home::where('id','>', 0)->first();
        $about  =About::where('id','>', 0)->first();
        $partner=Partner::where('id', '>', 0)->first();
        return view('admin.pages.all-pages',  compact('home','about', 'partner'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $homs = Home::find($id);
        return view('admin.pages.admin-home', compact('homs'));
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
        if ($request->hasfile('slider_image')) {
            $file=$request->slider_image;
            $filename   =time().$file->getClientOriginalname();
            $file-> move('upload/homepage', $filename);
        }
        if ($request->hasfile('select_image')){
            $file=$request->select_image;
            $filename   =time().$file->getClientOriginalname();
            $file-> move('upload/homepage', $filename);
        }
        $homs = Home::find($id);
        /*Home Image Update*/
        $homs->slider_image                   =$filename;
        $homs->select_image                   =$filename;
        /*Home Input Update*/
        $homs->social_icon_1                  =$request->social_icon_1;
        $homs->social_link_1                  =$request->social_link_1;
        $homs->social_icon_2                  =$request->social_icon_2;
        $homs->social_link_2                  =$request->social_link_2;
        $homs->social_icon_3                  =$request->social_icon_3;
        $homs->social_link_3                  =$request->social_link_3;
        $homs->social_icon_4                  =$request->social_icon_4;
        $homs->social_link_4                  =$request->social_link_4;
        $homs->phone                          =$request->phone;
        $homs->mail                           =$request->mail;
        $homs->slider_heading                 =$request->slider_heading;
        $homs->slider_disc                    =$request->slider_disc;
        $homs->button_text                    =$request->button_text;
        $homs->button_link                    =$request->button_link;
        $homs->tab_title_1                    =$request->tab_title_1;
        $homs->tab_disc_1                     =$request->tab_disc_1;
        $homs->tab_title_2                    =$request->tab_title_2;
        $homs->tab_disc_2                     =$request->tab_disc_2;
        $homs->tab_title_3                    =$request->tab_title_3;
        $homs->tab_disc_3                     =$request->tab_disc_3;
        $homs->course_heading                 =$request->course_heading;
        $homs->course_disc                    =$request->course_disc;
        $homs->select_title                   =$request->select_title;
        $homs->select_disc                    =$request->select_disc;
        $homs->select_icon_1                  =$request->select_icon_1;
        $homs->select_heading_1               =$request->select_heading_1;
        $homs->select_disc_1                  =$request->select_disc_1;
        $homs->select_icon_2                  =$request->select_icon_2;
        $homs->select_heading_2               =$request->select_heading_2;
        $homs->select_disc_2                  =$request->select_disc_2;
        $homs->form_title                     =$request->form_title;
        $homs->event_heading                  =$request->event_heading;
        $homs->event_disc                     =$request->event_disc;
        $homs->update();
        return redirect()->back()->with('message', 'Home Page Complated Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function url($id)
    {
     
       
        $data = [
            'home' => Home::all(),
            'ExtractedCertificates' =>   ExtractedCertificates::where('name_student',$id)->first(),
        ];
        
     

        return view('page',$data);
    }
}
