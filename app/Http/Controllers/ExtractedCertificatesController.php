<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\ExtractedCertificates;

class ExtractedCertificatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'data' => ExtractedCertificates::paginate(50),
        ];
        return view('admin.ExtractedCertificates.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ExtractedCertificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        
        $request->validate([

            'title' => ['required', 'string', 'max:255', 'unique:extracted_certificates'],

        ],[
            'title.unique' =>  'هذا العنوان مكرر من قبل'
        ]);

        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename = time() . $file->getClientOriginalname();
            $file->move('upload/ExtractedCertificates', $filename);
        }

        ExtractedCertificates::create([
            'title' => $request->title,
            'image' => $filename ?? null,
            'name_student' => $request->name_student,
            'url' => 'https://internationalcollege-online.uk/' . $request->name_student,
        ]);
        return redirect()->back()->with('message', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ExtractedCertificates::findorfail($id);
        return view('admin.ExtractedCertificates.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename = time() . $file->getClientOriginalname();
            $file->move('upload/ExtractedCertificates', $filename);
        }


        $data = ExtractedCertificates::findorfail($id);
        $data->image = $filename;
        $data->save();
        return redirect()->back()->with('message', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ExtractedCertificates::findorfail($id)->delete();
        return redirect()->back()->with('message', 'Deleted Successfully');
    }
}
