<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
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
            return view('admin.perusahaan.index',[
                'user' => User::paginate(5)
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
        if(Auth::id() == $id) {
            // valid user
            $user = Auth::user();
            return view('page.profile', compact("user"));
       } else {
            return view('error.403');
       }
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
        $request->validate([
            'nama'=> 'required',
            'username' => 'required|string|max:20|unique:users,username,'.$id,
            'email' => 'required|email|unique:users,email,'.$id,
            'no_telp' => 'string|max:13|required|unique:users,no_telp,'.$id,
            'perusahaan' => 'required',
        ]);

        $user = User::findOrFail($id);
        if ($request->hasFile('foto')) {
            if ($user->foto && file_exists(storage_path('app/public/'.$user->foto))) {
                Storage::delete('public/'.$user->foto);
            }
            $image_name = $request->file('foto')->store('profil', 'public');
            $user->foto = $image_name;
        }
        $user -> nama = $request->nama;
        $user -> password = Hash::make($request->password);
        $user -> username = $request->username;
        $user -> email = $request->email;
        $user -> no_telp = $request->no_telp;
        $user -> perusahaan = $request->perusahaan;
        $user -> save();

        return redirect('/home')->with('success','Profile Updated Successfully!');
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
