<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //return 'hi';
        //return $request;

        // retrieve session
        //return session()->all(); // retrieve all sessions
        //return session()->get('_token'); //retrieve one session value

        // set new values to session
        //session(['name'=>'pwh','email'=>'saeed@gmail.com','url'=>'pwh.com']);
        //session()->put('user_id',100);
        //return session()->all();
        //return session()->get('name');

        //delete session
        //session()->forget('name'); // delete a value in session
        //return session()->all();
//        session()->flush(); // Delete All session
//        return session()->all();

        //return session('email');

        //return $request->session()->all();

        //flash data

//        $request->session()->flash('msg','user created successful');
//        return $request->session()->get('msg');

        $request->session()->reflash();
        $request->session()->keep('msg');

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
