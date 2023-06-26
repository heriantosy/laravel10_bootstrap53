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

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSiswaRequest $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        //
    }
}
