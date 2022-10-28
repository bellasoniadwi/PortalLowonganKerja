<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Toko;
use App\Models\Status;
use App\Models\Layanan;
use App\Models\Transaksi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = auth()->user()->is_admin;
        if($admin){
            return view('admin.transaksi.index',[
                'transaksis' => Transaksi::latest()->get()
            ]);
        }

        $user = auth()->user()->name;
        if($user){
            return view('admin.transaksi.index',[
                'transaksis' => Transaksi::where('nama_toko', '=', $user)->get()
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
        return view('admin.transaksi.create',[
            'tokos' => Toko::get(),
            'layanans' => Layanan::get(),
            'statuses' => Status::get(),
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
            'berat' => 'required|numeric',
            'nama' => 'required|string',
            'nama_toko' => 'required|string',
            'token' => 'required|string|unique:transaksis',
            // 'toko_id' => 'required',
            'status_id' => 'required',
            'layanan_id' => 'required',
        ]);

        if($request->token || $request->nama_toko){
            $validate['token'] = Str::random(6);
            $validate['nama_toko'] = auth()->user()->name;
        }

        Transaksi::create($validate);

        return redirect('/dashboard/transaksi')->with('success','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        return view('admin.transaksi.show',[
            'transaksis' => Transaksi::find($transaksi)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        return view('admin.transaksi.edit',[
            'transaksis' => $transaksi,
            'tokos' => Toko::get(),
            'layanans' => Layanan::get(),
            'statuses' => Status::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $rules = [
            ''
        ];

        if($transaksi->nama != $request->nama){
            $rules['nama'] = 'required|string';
        }

        if($transaksi->nama_toko != $request->nama_toko){
            $rules['nama_toko'] = 'required|string';
        }

        if($transaksi->berat != $request->berat){
            $rules['berat'] = 'required|numeric';
        }

        if($transaksi->token != $request->token){
            if($request->oldToken){
                $rules['token'] = 'required|string';
            }
        }

        // if($transaksi->toko_id != $request->toko_id){
        //     $rules['toko_id'] = 'required';
        // }

        if($transaksi->layanan_id != $request->layanan_id){
            $rules['layanan_id'] = 'required';
        }

        if($transaksi->status_id != $request->status_id){
            $rules['status_id'] = 'required';
        }

        $validate['nama_toko'] = auth()->user()->name;
        $validate = $request->validate($rules);

        Transaksi::where('id', $transaksi->id)->update($validate);

        return redirect('/dashboard/transaksi')->with('success','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        Transaksi::destroy($transaksi->id);

        return redirect('/dashboard/transaksi')->with('success','Deleted Successfully!');
    }
}
