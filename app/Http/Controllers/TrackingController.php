<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\LowonganPekerjaan;
use App\Models\Peta;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagination = 12;
        $kategori = Kategori::all();
        $sorted = $kategori->SortBy('nama_kategori');

        $lowongan = LowonganPekerjaan::where('status', true)
            ->when($request->keyword, function ($query) use ($request) {
            $query
                ->where('kategori', 'like', "%{$request->keyword}%");
            })
            ->orderBy('nama_pekerjaan')->paginate($pagination);
            return view('home.track',compact('lowongan', 'sorted'))
                ->with($pagination);
    }

    public function search(Request $request)
    {
        // $kategori = Kategori::all();
        $keyword = $request->keyword;
        $kordinats = Peta::where('status', true)->where('kategori', 'like', "%" . $keyword . "%")->get();

        if($kordinats->count() > 0){
            return view('home.search',['kordinats' => Peta::where('status', true)
            ->where('kategori', 'like', "%" . $keyword . "%")->get()]);
        } else {
            return  view('home.nodata')->with('danger', 
            'Belum ada data pekerjaan tersimpan. Silahkan login untuk menambah data');
        }
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
        //
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
