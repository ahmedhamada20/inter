<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Home;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_event  =   Event::get();
        return view('admin.event.allevent', compact('all_event'));
    }
    public function eventhome(){
        $all_event  =   Event::get();
        return view('admin.event.allevent', compact('all_event'));
    }
    public function event(){
        $home   =Home::where('id', '>', 0)->first();
        $all_event  =   Event::get();
        return view('event', compact('all_event', 'home'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.add');
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
            $file-> move('upload/event', $filename);
        }

        Event::create([
            'name'=>$request->name,
            'date'=>$request->date,
            'disc'=>$request->disc,
            'image'=>$filename,

        ]);
        return redirect()->back()->with('message', 'Event Creted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $event_id   =   Event::find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Event::find($id);
        return view('admin.event.edit', compact('edit'));
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
            $file-> move('upload/event', $filename);
        }
        $edit = Event::find($id);
        $edit->name =   $request->name;
        $edit->image =$filename;
        $edit->date =$request->date;
        $edit->disc =$request->disc;
        $edit->update();
        return redirect('admin/event/all-event')->with('message', 'Event Complated Edit Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edit = Event::find($id);
        $edit ->destroy($id);
        return redirect()->back()->with('message', 'Event Delated Successfully');
    }
}
