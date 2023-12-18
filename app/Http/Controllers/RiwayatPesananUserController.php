<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPesanan;
use App\Models\RiwayatPesananItem;
use Illuminate\Http\Request;

class RiwayatPesananUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $userId = auth()->user()->id;
        $riwayatPesanan = RiwayatPesanan::where('user_id', $userId)->orderBy('created_at', 'desc')->get();
        return view('member.riwayatpesanan', compact('riwayatPesanan'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $userId = auth()->user()->id;
        $riwayatPesanan = RiwayatPesanan::with('riwayat_pesanan_item')
            ->where('user_id', $userId)
            ->where('id', $id)
            ->get();
        return view('member.detailriwayatpesanan', compact('riwayatPesanan'));
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
