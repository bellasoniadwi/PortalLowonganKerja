<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\LowonganPekerjaan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Titik;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Storage;

class LowonganPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $admin = auth()->user()->is_admin;
        if($admin)
        {
            $pagination = 5;
            $lowongan = LowonganPekerjaan::where('status', true)
            ->when($request->keyword, function ($query) use ($request) {
            $query
                ->where('nama_pekerjaan', 'like', "%{$request->keyword}%")
                ->orWhere('perusahaan', 'like', "%{$request->keyword}%")
                ->orWhere('contact_person', 'like', "%{$request->keyword}%")
                ->orWhere('tipe_pekerjaan', 'like', "%{$request->keyword}%")
                ->orWhere('gaji', 'like', "%{$request->keyword}%")
                ->orWhere('no_telp', 'like', "%{$request->keyword}%")
                ->orWhere('jam_kerja', 'like', "%{$request->keyword}%")
                ->orWhere('deskripsi', 'like', "%{$request->keyword}%")
                ->orWhereHas('kategori',function(Builder $kategori) use ($request){
                    $kategori->where('nama_kategori','like',"%{$request->keyword}%");
                });
            })->orderBy('nama_pekerjaan')->paginate($pagination);
            return view('admin.lowonganpekerjaan.index',compact('lowongan'))
                ->with('i', (request()->input('page', 1) - 1) * $pagination);

        }

        $user = auth()->user()->nama;
        if($user)
        {
            $pagination = 5;
            $lowongan = LowonganPekerjaan::where('contact_person', '=', $user)
            ->where('status', true)
            ->when($request->keyword, function ($query) use ($request) {
            $query
                ->where('nama_pekerjaan', 'like', "%{$request->keyword}%")
                ->orWhere('perusahaan', 'like', "%{$request->keyword}%")
                ->orWhere('tipe_pekerjaan', 'like', "%{$request->keyword}%")
                ->orWhere('gaji', 'like', "%{$request->keyword}%")
                ->orWhere('jam_kerja', 'like', "%{$request->keyword}%")
                ->orWhere('deskripsi', 'like', "%{$request->keyword}%")
                ->orWhereHas('kategori',function(Builder $kategori) use ($request){
                    $kategori->where('nama_kategori','like',"%{$request->keyword}%");
                });
            })->orderBy('nama_pekerjaan')->paginate($pagination);
            return view('admin.lowonganpekerjaan.index',compact('lowongan'))
                ->with('i', (request()->input('page', 1) - 1) * $pagination);
        }
    }

    public function inactive(Request $request)
    {
        $admin = auth()->user()->is_admin;
        if($admin)
        {
            $pagination = 5;
            $lowongan = LowonganPekerjaan::where('status', false)
            ->when($request->keyword, function ($query) use ($request) {
            $query
                ->where('nama_pekerjaan', 'like', "%{$request->keyword}%")
                ->orWhere('perusahaan', 'like', "%{$request->keyword}%")
                ->orWhere('contact_person', 'like', "%{$request->keyword}%")
                ->orWhere('tipe_pekerjaan', 'like', "%{$request->keyword}%")
                ->orWhere('gaji', 'like', "%{$request->keyword}%")
                ->orWhere('no_telp', 'like', "%{$request->keyword}%")
                ->orWhere('jam_kerja', 'like', "%{$request->keyword}%")
                ->orWhere('deskripsi', 'like', "%{$request->keyword}%")
                ->orWhereHas('kategori',function(Builder $kategori) use ($request){
                    $kategori->where('nama_kategori','like',"%{$request->keyword}%");
                });
            })->orderBy('nama_pekerjaan')->paginate($pagination);
            return view('admin.lowonganpekerjaan.inactive',compact('lowongan'))
                ->with('i', (request()->input('page', 1) - 1) * $pagination);
        }

        $user = auth()->user()->nama;
        if($user)
        {
            $pagination = 5;
            $lowongan = LowonganPekerjaan::where('contact_person', '=', $user)
            ->where('status', false)
            ->when($request->keyword, function ($query) use ($request) {
            $query
                ->where('nama_pekerjaan', 'like', "%{$request->keyword}%")
                ->orWhere('perusahaan', 'like', "%{$request->keyword}%")
                ->orWhere('tipe_pekerjaan', 'like', "%{$request->keyword}%")
                ->orWhere('gaji', 'like', "%{$request->keyword}%")
                ->orWhere('jam_kerja', 'like', "%{$request->keyword}%")
                ->orWhere('deskripsi', 'like', "%{$request->keyword}%")
                ->orWhereHas('kategori',function(Builder $kategori) use ($request){
                    $kategori->where('nama_kategori','like',"%{$request->keyword}%");
                });
            })->orderBy('nama_pekerjaan')->paginate($pagination);
            return view('admin.lowonganpekerjaan.inactive',compact('lowongan'))
                ->with('i', (request()->input('page', 1) - 1) * $pagination);
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
            'nama_pekerjaan' => 'required|string',
            'kategori_id' => 'required',
            'tipe_pekerjaan' => 'required',
            'perusahaan' => 'required',
            'x' => 'required',
            'y' => 'required',
            'deskripsi' => 'required|max:100|min:25',
            'jam_kerja' => 'required',
            'contact_person' => 'required',
            'no_telp' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png|max:5120',
        ]);

        $lowongan = new LowonganPekerjaan();

        $lowongan->nama_pekerjaan = $request->nama_pekerjaan;
        $lowongan->kategori_id = $request->kategori_id;
        $lowongan->tipe_pekerjaan = $request->tipe_pekerjaan;
        $lowongan->perusahaan = $request->perusahaan;
        $lowongan->deskripsi = $request->deskripsi;
        if ($request->gaji == null) {
            $lowongan->gaji = "-";
        }else{
            $lowongan->gaji = $request->gaji;
        }
        $lowongan->jam_kerja = $request->jam_kerja;
        $lowongan->contact_person = $request->contact_person;
        $lowongan->no_telp = $request->no_telp;
        $lowongan->x = $request->x;
        $lowongan->y = $request->y;
        $lowongan->foto = $request->file('foto')->store('images');  
        
        
        $lowongan->save();
        return redirect('/dashboard/lowonganpekerjaan')->with('success','Lowongan Pekerjaan Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Toko  $toko
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lowongan = LowonganPekerjaan::find($id);
        $kategori = Kategori::all();
        return view('admin.kordinat.show',compact('lowongan','kategori'));
    }

    public function detail($id)
    {
        $lowongan = LowonganPekerjaan::find($id);
        $kategori = Kategori::all();
        $kordinats = Titik::where('id', $id)->get();
        return view('admin.kordinat.show',compact('lowongan','kategori', 'kordinats'));
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
            'deskripsi' => 'required|max:100|min:25',
            'jam_kerja' => 'required',
            'contact_person' => 'required',
            'no_telp' => 'required',
        ]);

        $lowongan = LowonganPekerjaan::where('id', $id)->first();

        $lowongan->nama_pekerjaan = $request->get('nama_pekerjaan');
        $lowongan->kategori_id = $request->get('kategori_id');
        $lowongan->tipe_pekerjaan = $request->get('tipe_pekerjaan');
        $lowongan->perusahaan = $request->get('perusahaan');
        $lowongan->deskripsi = $request->get('deskripsi');
        if ($request->get('gaji') == null) {
            $lowongan->gaji = "-";
        }else{
            $lowongan->gaji = $request->get('gaji');
        }
        $lowongan->jam_kerja = $request->get('jam_kerja');
        $lowongan->contact_person = $request->get('contact_person');
        $lowongan->no_telp = $request->get('no_telp');
        $lowongan->x = $request->get('x');
        $lowongan->y = $request->get('y');
        if ($request->hasFile('foto')) {
            if ($lowongan->foto && file_exists(storage_path('app/public/' . $lowongan->gambar))) {
                Storage::delete('public/' . $lowongan->foto);
            }
            $image_name = $request->file('foto')->store('images');
            $lowongan->foto = $image_name;
        }

        $lowongan->save();
        return redirect('/dashboard/lowonganpekerjaan')->with('success','Lowongan Pekerjaan Berhasil Diupdate');
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
        return redirect('/dashboard/lowonganpekerjaan')->with('success','Lowongan Pekerjaan Berhasil Dihapus');
    }

    public function updateStatus(Request $request)
    {
        $lp = LowonganPekerjaan::find($request->id); 
        $lp->status = $request->status; 
        $lp->save(); 
        return response()->json(['success'=>'Status change successfully.']); 
    }
}
