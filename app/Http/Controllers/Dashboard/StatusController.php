<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.status.index',[
            'statuses' => Status::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'status' => 'required'
        ]);

        Status::create($validate);

        return redirect('/dashboard/status')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        return view('admin.status.show',[
            'statuses' => Status::find($status)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Status $status)
    {
        return view('admin.status.edit',[
            'statuses' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Status $status)
    {
        $rules = [
            'status' => 'required'
        ];

        $validate = $request->validate($rules);

        Status::where('id', $status->id)->update($validate);

        return redirect('/dashboard/status')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Status $status)
    {
        Status::destroy($status->id);

        return redirect('/dashboard/status')->with('success','Deleted Successfully!');
    }
}
