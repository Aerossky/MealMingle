<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPengiriman;
use Illuminate\Support\Facades\Validator;

class JadwalPengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jadwal = JadwalPengiriman::all();
        return view('admin.jadwal.jadwal', ['jadwal' => $jadwal]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.jadwal.jadwal-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'hari' => 'required|string|max:50',
            'waktu' => ['required', 'regex:/^(?:2[0-3]|[01][0-9]):[0-5][0-9]$/'], // Validasi format waktu (HH:mm)
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        // create
        JadwalPengiriman::create([
            'hari' => $request->hari,
            'waktu' => $request->waktu,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan!');
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
        $jadwal = JadwalPengiriman::findOrFail($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus!');
    }
}
