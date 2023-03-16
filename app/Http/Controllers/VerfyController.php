<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Verfy;
use Illuminate\Http\Request;

class VerfyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home   =Home::where('id', '>', 0)->first();
        return view('certificat', compact( 'home'));
    }

    public function search(Request $request)
    {
        $result=Verfy::where('number',$request->serial)->first();
        if ($result != null) {
            return redirect('certifiction/'.$result->id);
        }
        else
        {
            return redirect('certifiction/0');
        }

    }

    public function certifiction ($id)
    {
        if ($id !=0) {
            $result=Verfy::where('id',$id)->first();
            $home   =Home::where('id', '>', 0)->first();
            return view('certificat', compact( 'home','result'));
        }
        else
        {
            $home   =Home::where('id', '>', 0)->first();
            $fail="Serial Not Valid";
            return view('certificat', compact( 'home' ,'fail'));
        }

    }

    public function allcertification()
    {
        $certificates   = Verfy::paginate(10);
  
        return view('admin.verfy.all', compact('certificates'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $verfy  =   Verfy::get();
        return view('admin.verfy.add', compact('verfy'));
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
            $file-> move('upload/cert', $filename);
        }

        Verfy::create([
            'name'=>$request->name,
            'image'=>$filename,
            'number'=>$request->number,
            'natoinalty'=>$request->natoinalty,
            'study'=>$request->study,
        ]);
        return redirect()->back()->with('message', 'Certificate Added Successfully');
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
        $edit = Verfy::find($id);
        return view('admin.verfy.edit', compact('edit'));
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
            $file-> move('upload/cert', $filename);
        }

        $edit = Verfy::find($id);
        $edit->name =   $request->name;
        $edit->image =$filename ?? $edit->image;
        $edit->number =$request->number;
        $edit->natoinalty =$request->natoinalty;
        $edit->study =$request->study;
        $edit->update();
        return redirect('admin/Verfy/all-cert')->with('message', 'Certificate Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edit = Verfy::find($id);
        $edit ->destroy($id);
        return redirect()->back()->with('message', 'Certificate Delated Successfully');
    }
}
