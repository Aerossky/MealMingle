<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UlasanWebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ulasan = Ulasan::all();
        return view('admin.ulasan.ulasan', compact('ulasan'));
    }

    public function totalUlasanWebsite()
    {
        $totalUlasanWebsites = Ulasan::count();
        Session::put('totalUlasanWebsites', $totalUlasanWebsites);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //validator
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:ulasan',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->with('error', 'Anda sudah pernah mengirimkan ulasan!');
        }


        // create
        Ulasan::create([
            'name' => $request->name,
            'email' => $request->email,
            'deskripsi' => $request->deskripsi,
        ]);

        $this->totalUlasanWebsite();

        return redirect()->back()->with('berhasil', 'Ulasan berhasil ditambahkan!');
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
        //delete
        $ulasan = Ulasan::find($id);
        $ulasan->delete();
        $this->totalUlasanWebsite();

        return redirect()->route('ulasan.index')->with('status', 'Data berhasil dihapus!');
    }
}
