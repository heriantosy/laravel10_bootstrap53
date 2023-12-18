<?php

namespace App\Http\Controllers;

use App\Models\kurikulum;
use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        $kurikulum = kurikulum::get();
       return view('kurikulum.index', compact('kurikulum'));
    }

    public function create()
    {
       return view ('kurikulum.add');
    }

    public function store(Request $request)
    {
        $kurikulum = new kurikulum();
        $kurikulum->nama_kurikulum = $request->nama_kurikulum;
        $kurikulum->tahun = $request->tahun;
        $kurikulum->save();
        return redirect()->route('kurikulum.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
