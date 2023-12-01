<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RiwayatPesanan;
use Illuminate\Support\Facades\Validator;

class RiwayatPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayat_pesanans = RiwayatPesanan::select('id', 'total_harga', 'payment_type', 'transaction_status', 'user_id')
            ->orderBy('id', 'asc')
            ->paginate(1); // Paginate before getting the results

        return view('member.riwayatpesanan', ['riwayat_pesanans' => $riwayat_pesanans]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.riwayatpesanan.riwayatpesanan-add', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'total_harga' => 'required',
            'payment_type' => 'required',
            'transaction_status' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $validatedData = $validator->validated();
        RiwayatPesanan::create($validatedData);

        return redirect()->route('admin.user.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $riwayat_pesanan = RiwayatPesanan::findOrFail($id);
        $tenantId = $id;

        return view('admin.tenant.tenant-detail', ['riwayat_pesanan' => $riwayat_pesanan, 'tenantId' => $tenantId]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();

        $riwayat_pesanan = RiwayatPesanan::findOrFail($id);
        return view('admin.tenant.tenant-edit', ['riwayat_pesanan' => $riwayat_pesanan, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'total_harga' => 'required',
            'payment_type' => 'required',
            'transaction_status' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $riwayat_pesanan = RiwayatPesanan::findOrFail($id);

        $riwayat_pesanan->update([
            'total_harga' => $request->total_harga,
            'payment_type' => $request->payment_type,
            'transaction_status' => $request->transaction_status,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('user.index')->with('status', 'Riwayat pesanan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $riwayat_pesanan = RiwayatPesanan::findOrFail($id);
        $riwayat_pesanan->delete();

        return redirect()->route('user.index')->with('status', 'Riwayat pesanan berhasil dihapus!');
    }
}
