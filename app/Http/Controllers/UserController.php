<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\jabatan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $DataUsers = user::all();
            return view ('UserMan.datauser',compact('DataUsers'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatann = jabatan::all();
            return view ('UserMan.adduser',compact('jabatann'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());//'name','level', 'email', 'password',
            $user = new user();
            $user -> name = $request -> name;
            $user -> jabatan_id = $request -> jabatan_id;
            $user -> email = $request -> email;
            $user -> password = bcrypt($request);
            $user -> remember_token = $random = Str::random(60);
            $user -> save ();

        return redirect ('/user')->with('toast_success', 'Data Berhasil disimpan!!');
       
        
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
