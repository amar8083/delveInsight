<?php

namespace App\Http\Controllers;

use App\Models\SubmitData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubmitDataController extends Controller
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

        $request->validate([
           'name' => 'required',
           'email' => 'required',
           'company' => 'required',
           'number' => 'required|min:10',
           'message' => 'required|max:100'
        ]);
        //
        $data=new SubmitData;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->company=$request->company;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->save();
        return redirect()->back()->with('message', 'Thank You, We Will Contact You Soon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubmitData  $submitData
     * @return \Illuminate\Http\Response
     */
    public function show(SubmitData $submitData)
    {
        //
        $submitdatas = DB::table('submit_data')->paginate(3);
        return view('/dashboard')->with(['submitdatas' => $submitdatas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubmitData  $submitData
     * @return \Illuminate\Http\Response
     */
    public function edit(SubmitData $submitData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubmitData  $submitData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubmitData $submitData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubmitData  $submitData
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubmitData $submitData)
    {
        //
    }
}
