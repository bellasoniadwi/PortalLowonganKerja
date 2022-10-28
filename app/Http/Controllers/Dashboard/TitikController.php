<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Titik;
use Illuminate\Http\Request;

class TitikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kordinat.index',[
            'kordinats' => Titik::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kordinat.create');
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
            'x' => 'required',
            'y' => 'required',
        ]);

        Titik::create($validate);

        return redirect('/dashboard/titik')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Titik  $titik
     * @return \Illuminate\Http\Response
     */
    public function show(Titik $titik)
    {
        return view('admin.kordinat.show',[
            'kordinats' => Titik::where('id','=', $titik->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titik  $titik
     * @return \Illuminate\Http\Response
     */
    public function edit(Titik $titik)
    {
        return view('admin.kordinat.edit',[
            'titiks' => $titik
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titik  $titik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titik $titik)
    {
        $rules = [
            'x' => 'required',
            'y' => 'required',
        ];

        $validate = $request->validate($rules);

        Titik::where('id', $titik->id)->update($validate);

        return redirect('/dashboard/titik')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titik  $titik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titik $titik)
    {
        Titik::destroy($titik->id);

        return redirect('/dashboard/titik')->with('success','Deleted Successfully!');
    }
}
