<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Throwable;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kategori.index',[
            'kategori' => Kategori::orderBy('nama_kategori', 'asc')
            ->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
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
            'nama_kategori' => 'required'
        ]);

        Kategori::create($validate);

        return redirect('/dashboard/kategori')->with('success','Kategori Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.edit',[
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori)
    {
        $rules = [
            'nama_kategori' => 'required'
        ];

        $validate = $request->validate($rules);

        Kategori::where('id', $kategori->id)->update($validate);

        return redirect('/dashboard/kategori')->with('success','Kategori Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        try{
            Kategori::destroy($kategori->id);
            return redirect('/dashboard/kategori')->with('success','Kategori Berhasil Dihapus');
        }catch(Throwable $error){
            report($error);
            return redirect('/dashboard/kategori')->with('warning', 
            'Mohon Maaf Data Kategori Tidak Bisa Dihapus');
        }
    }
}
