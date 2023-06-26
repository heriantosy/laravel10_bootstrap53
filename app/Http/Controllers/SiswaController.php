<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;

class SiswaController extends Controller
{
    public function index()
    {
        return view ('siswa.index')->with([
            'siswa' => Siswa::all()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreSiswaRequest $request)
    {
       $validata=$request->validated();
       $siswa = new Siswa;
       $siswa->id_siswa     = $request->id_siswa;
       $siswa->nama_siswa   = $request->nama_siswa;
       $siswa->alamat       = $request->alamat;
       $siswa->phone        = $request->phone;
       $siswa->gender       = $request->gender;
       $siswa->save();
       return redirect('siswa')->with('msg', 'Add Sukses');

    }

    public function show(Siswa $siswa, $id_siswa)
    {
        echo $id_siswa;
        // $data = $siswa->find($id_siswa);
        // return view('siswa.edit')->with([
        //     'id_siswa' => $id_siswa,
        //     'nama_siswa' => $data->nama_siswa,            
        // ]);
        
    }


    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        //
    }

    public function destroy(Siswa $siswa)
    {
        //
    }
}
