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
                'lowongan' => LowonganPekerjaan::latest()->get()
            ]);
        }

        $user = auth()->user()->nama;
        if($user)
        {
            return view('admin.lowonganpekerjaan.index',[
                'lowongan' => LowonganPekerjaan::where('customer_service', '=', $user)->get()
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
        return view('admin.lowonganpekerjaan.create',
        ['kategori'=>$kategori]);
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
            'customer_service' => 'required',
            'no_telp' => 'required',
        ]);

        $lowongan = new LowonganPekerjaan();

        $lowongan->nama_pekerjaan = $request->get('nama_pekerjaan');
        $lowongan->kategori_id = $request->get('kategori_id');
        $lowongan->tipe_pekerjaan = $request->get('tipe_pekerjaan');
        $lowongan->perusahaan = $request->get('perusahaan');
        $lowongan->deskripsi = $request->get('deskripsi');
        $lowongan->customer_service = $request->get('customer_service');
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
    public function edit(LowonganPekerjaan $toko)
    {
        return view('admin.lowonganpekerjaan.edit',[
            'tokos' => $toko
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LowonganPekerjaan $toko)
    {
        $rules = [
            'x' => 'required',
            'y' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'pemilik' => 'required',
            'image' => 'required|max:5120|mimes:jpg,png',
            'jam_buka' => 'required',
            'jam_tutup' => 'required',
        ];

        if($request->pemilik){
            $validate['pemilik'] = auth()->user()->nama;
        }

        $validate = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete([$request->oldImage]);
            }
            $validate['image'] = $request->file('image')->store('images');
        }

        LowonganPekerjaan::where('id', $toko->id)->update($validate);

        return redirect('/dashboard/toko')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LowonganPekerjaan  $toko
     * @return \Illuminate\Http\Response
     */
    public function destroy(LowonganPekerjaan $toko)
    {
        LowonganPekerjaan::destroy($toko->id);

        if($toko->image){
            Storage::delete([$toko->image]);
        }

        return redirect('/dashboard/toko')->with('success','Deleted Successfully!');
    }
}
