<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vote;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'Vote_Title' => 'required',
            'Name_of_Contestant' => 'required',
            'Email_Of_Voters' => 'required',
            'Start_Date' => 'required',
            'End_Date' => 'required',
            'Start_Time' => 'required',
            'End_Time' => 'required',
        ]);
        //return $request->input('Vote_Title');
        $Vote = new Vote;
        $Vote->votecode = 'BV'.rand(10,99).'XPPT'.rand(100,999);
        $Vote->title = $request->input('Vote_Title');
        $Vote->Contestant = $request->input('Name_of_Contestant');
        $Vote->Email_Of_Voters = $request->input('Email_Of_Voters');
        $Vote->Start_Date = $request->input('Start_Date');
        $Vote->End_Date = $request->input('End_Date');
        $Vote->Start_Time = $request->input('Start_Time');
        $Vote->End_Time = $request->input('End_Time');
        $Vote->save();

        return redirect('/')->with('success','Vote Submitted');

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
