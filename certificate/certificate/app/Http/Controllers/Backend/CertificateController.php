<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certs  =   Certificate::paginate(1);
        return view('backend.certificate.index',compact('certs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.certificate.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cert   =   new Certificate();
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename = time() . $file->getClientOriginalname();
            $file->move('upload/cert', $filename);
            $cert->image = $filename;
        }
        $cert->name =$request->name;
        $cert->code =$request->code;
        $cert->save();
        return redirect()->back()->with('message', 'تمت اضافة الشهادة بنجاح');
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
        $cert   =   Certificate::findorfail($id);
        return view('backend.certificate.blade.php.edit',compact('cert'));
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
        $cert   =   Certificate::findorfail($id);
        if ($request->hasfile('image')) {
            $file = $request->image;
            $filename = time() . $file->getClientOriginalname();
            $file->move('upload/cert', $filename);
            $cert->image = $filename;
        }
        $cert->name =$request->name;
        $cert->code =$request->code;
        $cert->update();
        return redirect()->back()->with('message', 'تمت اضافة الشهادة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cert   =   Certificate::findorfail($id);
        $cert->destroy($id);
    }
}
