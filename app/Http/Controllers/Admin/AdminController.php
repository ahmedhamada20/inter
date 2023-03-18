<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getSliders()
    {
        $data = Slider::all();
        return view('admin.sliders.index', compact('data'));
    }

    public function editSliders($id)
    {
        $data = Slider::findorfail($id);
        return view('admin.sliders.edit', compact('data'));
    }

    public function Createsliders()
    {
        return view('admin.sliders.create');
    }

    public function updatedSliders(Request $request)
    {
        $data = Slider::findorfail($request->id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $image_1   = time() . $file->getClientOriginalname();
            $file->move('upload/Slider', $image_1);
            $data->image               = $image_1;
        }
        if ($request->hasfile('image_2')) {
            $file = $request->image_2;
            $image_1   = time() . $file->getClientOriginalname();
            $file->move('upload/Slider', $image_1);
            $data->image_2               = $image_1;
        }

        $data->name = $request->name;
        $data->notes = $request->notes;
        $data->save();

        return redirect()->back()->with('message', 'Slider Edit Successfully');
    }

    public function SaveedSliders(Request $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/Slider', $filename);
        }

        if ($request->hasfile('image_2')) {
            $file = $request->image_2;
            $filename_1  = time() . $file->getClientOriginalname();
            $file->move('upload/Slider', $filename_1);
        }


        Slider::create([
            'name' => $request->name,
            'notes' => $request->notes,
            'image' => $filename,
            'image_2' => $filename_1,
        ]);
        return redirect()->back()->with('message', 'Slider Saved Successfully');

    }

    public function deletedSliders($id)
    {
        Slider::destroy($id);
        return redirect()->route('getSliders')->with('message', 'Slider Deleted Successfully');
    }
}
