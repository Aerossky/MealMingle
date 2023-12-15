<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Config;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\KeranjangItem;
use App\Models\RiwayatPesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keranjangs = Keranjang::select('id', 'total_harga', 'note_pesanan', 'user_id')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.user.user-detail', ['keranjangs' => $keranjangs]);
    }

    public function indexuser()
    {
        $userId = Auth::id();
        $keranjangs = Keranjang::with('keranjang_item')->where('user_id', $userId)->firstOrFail();
        $keranjang_items = $keranjangs->keranjang_item;

        $this->getTotalHarga();
        $this->keranjangItem();

        return view('member.keranjang', ['keranjangs' => $keranjangs, 'keranjang_items' => $keranjang_items, 'userId' => $userId]);
    }


    public function getGrossAmount()
    {
        $userId = Auth::id();
        $keranjangs = Keranjang::with('keranjang_item')->where('user_id', $userId)->firstOrFail();
        $grossAmount = $keranjangs->keranjang_item->sum(function ($item) {
            return $item->menu->harga_produk * $item->jumlah;
        });

        return $grossAmount;
    }

    public function getTotalHarga()
    {
        $userId = Auth::id();
        $keranjangs = Keranjang::with('keranjang_item')->where('user_id', $userId)->firstOrFail();
        $totalHarga = $keranjangs->keranjang_item->sum(function ($item) {
            return $item->menu->harga_produk * $item->jumlah;
        });

        $keranjangs->total_harga = $totalHarga;
        $keranjangs->save();

        return $totalHarga;
    }

    public function checkout()
    {
        return view('member.pembayaran');
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        // Memeriksa apakah hashed yang dikirim dari Midtrans sama dengan yang dibuat
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                $order = RiwayatPesanan::where('order_id', $request->order_id)->firstOrFail();
                $order->update(['transaction_status' => 'Paid']);

                // Menyimpan payment_type dari callback Midtrans ke dalam pesanan
                $order->update(['payment_type' => $request->payment_type]);
            }
        }
    }

    public function keranjangItem()
    {
        $userId = Auth::id();
        $keranjangs = Keranjang::with('keranjang_item')->where('user_id', $userId)->firstOrFail();
        $keranjang_items = $keranjangs->keranjang_item;
        $itemCount = $keranjang_items->count();
        Session::put('itemCount', $itemCount);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.keranjang.keranjang-add', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'total_harga' => 'required',
            'note_pesanan' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $validatedData = $validator->validated();
        Keranjang::create($validatedData);

        return redirect()->route('admin.user.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $userId = $id;

        return view('admin.keranjang.keranjang-detail', ['keranjang' => $keranjang, 'userId' => $userId]);
    }

    public function showuser($id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $userId = $id;

        return view('admin.keranjang.keranjang-detail', ['keranjang' => $keranjang, 'userId' => $userId]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();

        $keranjang = Keranjang::findOrFail($id);
        return view('admin.keranjang.keranjang-edit', ['keranjang' => $keranjang, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'total_harga' => 'required',
            'note_pesanan' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $keranjang = Keranjang::findOrFail($id);

        $keranjang->update([
            'total_harga' => $request->total_harga,
            'note_pesanan' => $request->note_pesanan,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('user.index')->with('status', 'Keranjang berhasil diperbarui!');
    }

    public function removeItem(string $id)
    {
        $userId = Auth::id();
        $keranjangs = Keranjang::with('keranjang_item')->where('user_id', $userId)->firstOrFail();
        $keranjang_items = $keranjangs->keranjang_item;
        $delete_item = $keranjang_items->where('id', $id)->firstOrFail();
        $delete_item->delete();

        $this->keranjangItem();
        $this->getTotalHarga();

        return redirect()->route('keranjang.indexuser');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keranjang = Keranjang::findOrFail($id);
        $keranjang->delete();

        return redirect()->route('user.index')->with('status', 'Keranjang berhasil dihapus!');
    }
}
