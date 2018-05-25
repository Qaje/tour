<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Event;

class EventController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        //$user = User::all();
        //dd($user);
        return view('event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title        =  $_POST('title');
        $name         =  $_POST('name');
        $begins_date  =  $_POST('begins_date');
        $ends_date    =  $_POST('ends_date');
        $begins_time  =  $_POST('begins_time');
        $ends_time    =  $_POST('ends_time');

        $event = new Event();
        $event->begins_date = $start(); 
        $event->all_day = true;
        $event->title = $title;

        $event->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo('guars');
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
