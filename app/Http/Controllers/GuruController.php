<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Http\Requests\StoreGuruRequest;
use App\Http\Requests\UpdateGuruRequest;

class GuruController extends Controller
{
    public function index()
    {
        return view ('guru.data')->with([
            'guru' => Guru::all()
        ]);
    }
    public function create()
    {
        //
    }

    public function store(StoreGuruRequest $request)
    {
        //
    }

    public function show(Guru $guru)
    {
        //
    }

    public function edit(Guru $guru)
    {
        //
    }

    public function update(UpdateGuruRequest $request, Guru $guru)
    {
        //
    }

    public function destroy(Guru $guru)
    {
        //
    }
}
