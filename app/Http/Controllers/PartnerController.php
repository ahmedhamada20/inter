<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners   = Partner::get();
        return view('admin.pages.partner', compact('partners'));
    }
    public function home(){
        $home   =Home::where('id', '>', 0)->first();
        $partners   = Partner::get();
        $partner    =Partner::where('id', '>',0)->first();
        return view('partner', compact('partners', 'partner', 'home'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Partners= Partner::get();
        return view('admin.pages.editpartner', compact('Partners'));
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
            $file-> move('upload/partner', $filename);
        }
        Partner::create([
            'image'=>$filename,
            'page_name'=>$request->page_name,
        ]);
        return redirect()->back()->with('message', 'Partner Added Successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delet = Partner::find($id);
        $delet ->destroy($id);
        return redirect()->back()->with('message', 'Partner Delated Successfully');
    }
}
