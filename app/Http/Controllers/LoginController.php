<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.login.login');
    }
    public function check(Request $request){
        $request->validate([
            'email'=> 'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        //check email
        $userinfo = Login::where('email','=',$request->email)->first();
        if(!$userinfo){
            return back()->with('fail','This Email Address Not Approve To Access Admin Area');
        }else{
        //check password
            if (Hash::check($request->password,$userinfo->password)) {
                $request->session()->put('LogedUser', $userinfo->id);
                return redirect('admin');
            }else{
                return back()->with('fail', 'Incorrect Password');
            }

        }
    }
    public function logout(){
        if (session()->has('LogedUser')) {
            session()->pull('LogedUser');
            return redirect('admin/admin-area');
        }
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
        //
    }
}
