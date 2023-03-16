<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Home;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about   =About::first();
        return view('admin.pages.about',  compact('about'));
    }

    public function abouthome(){
        $home   =Home::where('id', '>', 0)->first();
        $about_page  =About::where('id', true)->first();
        return view('about', compact('about_page', 'home'));
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
    public function aboutedit($id)
    {
        $abouts = About::find($id);
        return view('admin.pages.about', compact('abouts'));
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

        $abouts = About::find($id);
        /*About Image Update*/
        if ($request->hasfile('header_image')) {
            $file=$request->header_image;
            $image_1   =time().$file->getClientOriginalname();
            $file-> move('upload/about', $image_1);
        $abouts->header_image               = $image_1;
        }
        if ($request->hasfile('why_image')){
            $file=$request->why_image;
            $image_2   =time().$file->getClientOriginalname();
            $file-> move('upload/about', $image_2);
        $abouts->why_image                  = $image_2;
        }
        if ($request->hasfile('who_image')){
            $file=$request->who_image;
            $image_3   =time().$file->getClientOriginalname();
            $file-> move('upload/about', $image_3);
        $abouts->who_image                  = $image_3;
        }
        /*About Input Update*/
        $abouts->heading                    =$request->heading;
        $abouts->who_title                  =$request->who_title;
        $abouts->who_disc                   =$request->who_disc;
        $abouts->why_heading                =$request->why_heading;
        $abouts->why_disc                   =$request->why_disc;
        $abouts->tab_title_1                =$request->tab_title_1;
        $abouts->tab_disc_1                 =$request->tab_disc_1;
        $abouts->tab_title_2                =$request->tab_title_2;
        $abouts->tab_disc_2                 =$request->tab_disc_2;
        $abouts->tab_title_3                =$request->tab_title_3;
        $abouts->tab_disc_3                 =$request->tab_disc_3;
        $abouts->tab_title_4                =$request->tab_title_4;
        $abouts->tab_disc_4                 =$request->tab_disc_4;
        $abouts->ask_heading                =$request->ask_heading;
        $abouts->button_text                =$request->button_text;
        $abouts->button_link                =$request->button_link;
        $abouts->update();
        return redirect()->back()->with('message', 'About Page Complated Edit Successfully');
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
}
