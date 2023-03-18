<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Academic;
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

    ########################################### Academics ################################################################



    public function getAcademics()
    {
        $data = Academic::all();
        return view('admin.getAcademics.index', compact('data'));
    }

    public function editAcademics($id)
    {
        $data = Academic::findorfail($id);
        return view('admin.getAcademics.edit', compact('data'));
    }

    public function CreateAcademics()
    {
        return view('admin.getAcademics.create');
    }

    public function updatedAcademics(Request $request)
    {
        $data = Academic::findorfail($request->id);

        $data->name = $request->name;
        $data->notes = $request->notes;
        $data->save();

        return redirect()->back()->with('message', 'Academic Edit Successfully');
    }

    public function SaveedAcademics(Request $request)
    {

        Academic::create([
            'name' => $request->name,
            'notes' => $request->notes,

        ]);
        return redirect()->back()->with('message', 'Academic Saved Successfully');
    }

    public function deletedAcademics($id)
    {
        Academic::destroy($id);
        return redirect()->route('getAcademics')->with('message', 'Academic Deleted Successfully');
    }



    ########################################### Abouts ################################################################



    public function getaboutsus()
    {
        $data = About::all();
        return view('admin.getaboutsus.index', compact('data'));
    }

    public function editaboutsus($id)
    {
        $data = About::findorfail($id);
        return view('admin.getaboutsus.edit', compact('data'));
    }

    public function Createaboutsus()
    {
        return view('admin.getaboutsus.create');
    }

    public function updatedaboutsus(Request $request)
    {
        $data = About::findorfail($request->id);

        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/about', $filename);

            $data->image = $filename;
        }

      
        $data->name = $request->name;
        $data->notes = $request->notes;
        $data->futhre_1 = $request->futhre_1;
        $data->futhre_2 = $request->futhre_2;
        $data->futhre_3 = $request->futhre_3;
        $data->futhre_4 = $request->futhre_4;
        $data->futhre_5 = $request->futhre_5;
        $data->futhre_6 = $request->futhre_6;
        $data->futhre_7 = $request->futhre_7;
        $data->futhre_8 = $request->futhre_8;
        $data->number_title_1 = $request->number_title_1;
        $data->number_1 = $request->number_1;
        $data->number_title_2 = $request->number_title_2;
        $data->number_2 = $request->number_2;
        $data->number_3 = $request->number_3;
        $data->number_title_3 = $request->number_title_3;
        $data->save();

        return redirect()->back()->with('message', 'About Edit Successfully');
    }

    public function Saveedaboutsus(Request $request)
    {


        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename   = time() . $file->getClientOriginalname();
            $file->move('upload/about', $filename);
        }

        About::create([
            'image' => $filename,
            'name' => $request->name,
            'notes' => $request->notes,
            'futhre_1' => $request->futhre_1,
            'futhre_2' => $request->futhre_2,
            'futhre_3' => $request->futhre_3,
            'futhre_4' => $request->futhre_4,
            'futhre_5' => $request->futhre_5,
            'futhre_6' => $request->futhre_6,
            'futhre_7' => $request->futhre_7,
            'futhre_8' => $request->futhre_8,
            'number_title_1' => $request->number_title_1,
            'number_1' => $request->number_1,
            'number_title_2' => $request->number_title_2,
            'number_2' => $request->number_2,
            'number_3' => $request->number_3,
            'number_title_3' => $request->number_title_3,

        ]);
        return redirect()->back()->with('message', 'About Saved Successfully');
    }

    public function deletedaboutsus($id)
    {
        About::destroy($id);
        return redirect()->route('getaboutsus')->with('message', 'About Deleted Successfully');
    }
}
