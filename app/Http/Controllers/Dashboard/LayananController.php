<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Toko;
use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = auth()->user()->is_admin;
        if($admin)
        {
            return view('admin.layanan.index',[
                'layanans' => Layanan::latest()->get()
            ]);
        }

        $user = auth()->user()->name;
        if($user)
        {
            return view('admin.layanan.index',[
                'layanans' => Layanan::where('nama_toko', '=', $user)->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.layanan.create',[
            'tokos' => Toko::get()
        ]);
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
            'jenis' => 'required',
            'toko_id' => 'required'
        ]);

        Layanan::create($validate);

        return redirect('/dashboard/layanan')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        return view('admin.layanan.edit',[
            'layanans' => $layanan,
            'tokos' => Toko::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
    {
        $rules = [
            'jenis' => 'required'
        ];

        if($layanan->toko_id != $request->toko_id){
            $rules['toko_id'] = 'required';
        }

        $validate = $request->validate($rules);

        Layanan::where('id', $layanan->id)->update($validate);

        return redirect('/dashboard/layanan')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        Layanan::destroy($layanan->id);

        return redirect('/dashboard/layanan')->with('success','Deleted Successfully!');
    }
}
