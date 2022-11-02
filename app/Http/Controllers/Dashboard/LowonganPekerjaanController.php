<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\LowonganPekerjaan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LowonganPekerjaanController extends Controller
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
            return view('admin.lowonganpekerjaan.index',[
                'lowongan' => LowonganPekerjaan::paginate(5)
            ]);
        }

        $user = auth()->user()->nama;
        if($user)
        {
            return view('admin.lowonganpekerjaan.index',[
                'lowongan' => LowonganPekerjaan::where('contact_person', '=', $user)
                // ->get()
                ->paginate(5)
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
        $kategori = Kategori::all();
        $sorted = $kategori->SortBy('nama_kategori');

        return view('admin.lowonganpekerjaan.create',
        ['kategori'=>$sorted]);
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
            'nama_pekerjaan' => 'required',
            'kategori_id' => 'required',
            'tipe_pekerjaan' => 'required',
            'perusahaan' => 'required',
            'x' => 'required',
            'y' => 'required',
            'deskripsi' => 'required',
            'contact_person' => 'required',
            'no_telp' => 'required',
        ]);

        $lowongan = new LowonganPekerjaan();

        $lowongan->nama_pekerjaan = $request->get('nama_pekerjaan');
        $lowongan->kategori_id = $request->get('kategori_id');
        $lowongan->tipe_pekerjaan = $request->get('tipe_pekerjaan');
        $lowongan->perusahaan = $request->get('perusahaan');
        $lowongan->deskripsi = $request->get('deskripsi');
        $lowongan->contact_person = $request->get('contact_person');
        $lowongan->no_telp = $request->get('no_telp');
        $lowongan->x = $request->get('x');
        $lowongan->y = $request->get('y');
        
        
        $lowongan->save();
        return redirect('/dashboard/lowonganpekerjaan')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show(LowonganPekerjaan $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lowongan = LowonganPekerjaan::find($id);
        $kategori = Kategori::all();
        
        return view('admin.lowonganpekerjaan.edit', compact('lowongan','kategori'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pekerjaan' => 'required',
            'kategori_id' => 'required',
            'tipe_pekerjaan' => 'required',
            'perusahaan' => 'required',
            'x' => 'required',
            'y' => 'required',
            'deskripsi' => 'required',
            'contact_person' => 'required',
            'no_telp' => 'required',
        ]);

        $lowongan = LowonganPekerjaan::findOrFail($id);

        $lowongan->nama_pekerjaan = $request->nama_pekerjaan;
        $lowongan->kategori_id = $request->kategori_id;
        $lowongan->tipe_pekerjaan = $request->tipe_pekerjaan;
        $lowongan->perusahaan = $request->perusahaan;
        $lowongan->deskripsi = $request->deskripsi;
        $lowongan->contact_person = $request->contact_person;
        $lowongan->no_telp = $request->no_telp;
        $lowongan->x = $request->x;
        $lowongan->y = $request->y;

        $lowongan->save();
        return redirect('/dashboard/lowonganpekerjaan')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LowonganPekerjaan  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LowonganPekerjaan::find($id)->delete();
        return redirect('/dashboard/lowonganpekerjaan')->with('success','Deleted Successfully!');
    }
}