<?php

namespace App\Http\Controllers;

use App\Models\Universitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UniversitasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $universitas = Universitas::all();
        return view('admin.universitas.universitas', compact('universitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.universitas.universitas-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        // create
        Universitas::create([
            'universitas' => $request->nama
        ]);

        return redirect()->route('universitas.index')->with('status', 'Universitas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Universitas $universitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $universitas = Universitas::findOrFail($id);
        return view('admin.universitas.universitas-edit', compact('universitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        // update
        Universitas::where('id', $id)->update([
            'universitas' => $request->nama,
            // tambahkan kolom lain yang ingin diupdate
        ]);

        return redirect()->route('universitas.index')->with('status', 'Universitas berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Universitas $universitas)
    {
        //
    }
}
