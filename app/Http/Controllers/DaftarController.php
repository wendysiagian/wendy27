<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('formdaftar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('formdaftar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate(
            [
                'nama' => 'required',
                'email' => 'required|email',
                'nohp' => 'required',
                'semester' => 'required',
                'ipk' => 'required',
                'status' => 'required',
                'dok' => 'required|image',
                'tgl' => 'required',
            ],
            [
                'nama.required' => 'Username tidak boleh kosong!',
                'email.required' => 'Email tidak boleh kosong!',
                'email.email' => 'Format email salah!',
                'nohp.required' => 'Password tidak boleh kosong!',
                'semester.required' => 'Role tidak boleh kosong!',
                'ipk.required' => 'Role tidak boleh kosong!',
                'status.required' => 'Role tidak boleh kosong!',
                'dok.required' => 'Role tidak boleh kosong!',
                'dok.image' => 'Role tidak boleh kosong!',
                'tgl.required' => 'Role tidak boleh kosong!',
            ],
        );
        $this->dok->storeAs('public/akademik', $this->dok->hashName());
        Akademik::create([
            'user_id' => auth()->user()->id,
            'nama' => $this->nama,
            'email' => $this->email,
            'nohp' => $this->nohp,
            'semester' => $this->semester,
            'ipk' => $this->ipk,
            'status' => $this->status,
            'dok' => $this->dok->hashName(),
            'tgl' => $this->tgl,
        ]);
        session()->flash('success', 'Berhasil Simpan data!');
        $this->reset();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
