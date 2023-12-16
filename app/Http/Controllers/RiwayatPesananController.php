<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RiwayatPesanan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RiwayatPesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->get('search');

        // Query pencarian ke dalam data RiwayatPesanan
        $riwayat_pesanans = RiwayatPesanan::join('users', 'riwayat_pesanans.user_id', '=', 'users.id')
            ->select('riwayat_pesanans.*')
            ->where('users.name', 'like', '%' . $query . '%')
            ->orWhere('riwayat_pesanans.total_harga', 'like', '%' . $query . '%')
            ->orWhere('riwayat_pesanans.transaction_status', 'like', '%' . $query . '%')
            ->orWhere('riwayat_pesanans.order_id', 'like', '%' . $query . '%')
            ->orderBy('riwayat_pesanans.id', 'asc')
            ->paginate(10);

        return view('admin.riwayatpesanan.riwayatpesanan', ['riwayat_pesanans' => $riwayat_pesanans]);
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
        //sesuai id
        $riwayat_pesanan = RiwayatPesanan::with('riwayat_pesanan_item')->where('id', $id)->get();
        return view('admin.riwayatpesanan.riwayatpesanan-detail', ['riwayat_pesanan' => $riwayat_pesanan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $riwayat_pesanan = RiwayatPesanan::findOrFail($id);

        return view('admin.riwayatpesanan.riwayatpesanan-edit', ['riwayat_pesanan' => $riwayat_pesanan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'transaction_status' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $riwayat_pesanan = RiwayatPesanan::findOrFail($id);

        $riwayat_pesanan->update([
            'transaction_status' => $request->transaction_status,
        ]);

        return redirect()->route('riwayatpesanan.index')->with('status', 'Riwayat pesanan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $riwayat_pesanan = RiwayatPesanan::findOrFail($id);
        $riwayat_pesanan->delete();

        // Hapus foto jika ada
        if ($riwayat_pesanan->bukti_pembayaran) {
            $fotoPath = 'bukti/' . $riwayat_pesanan->bukti_pembayaran;

            if (Storage::disk('public')->exists($fotoPath)) {
                Storage::disk('public')->delete($fotoPath);
            }
        }

        return redirect()->route('riwayatpesanan.index')->with('status', 'Riwayat pesanan berhasil dihapus!');
    }


    // display for member view
    public function indexUser()
    {
        $riwayat_pesanans = RiwayatPesanan::select('id', 'total_harga', 'transaction_status', 'user_id')
            ->orderBy('id', 'asc')
            ->paginate(1); // Paginate before getting the results

        return view('member.riwayatpesanan', ['riwayat_pesanans' => $riwayat_pesanans]);
    }
}
