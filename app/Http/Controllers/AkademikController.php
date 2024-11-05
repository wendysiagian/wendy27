<?php

namespace App\Http\Controllers;

use App\Models\Akademik;
use Illuminate\Http\Request;

class AkademikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $akademiks = Akademik::all();
        return view('akademik.index', compact('akademiks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('akademik.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:akademiks',
            // Add other validations as needed
        ]);

        Akademik::create($request->all());

        return redirect()->route('akademik.index')->with('success', 'Akademik created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Akademik $akademik)
    {
        return view('akademik.show', compact('akademik'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Akademik $akademik)
    {
        return view('akademik.edit', compact('akademik'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Akademik $akademik)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:akademiks,email,' . $akademik->id,
            // Add other validations as needed
        ]);

        $akademik->update($request->all());

        return redirect()->route('akademik.index')->with('success', 'Akademik updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Akademik $akademik)
    {
        $akademik->delete();

        return redirect()->route('akademik.index')->with('success', 'Akademik deleted successfully.');
    }
}
