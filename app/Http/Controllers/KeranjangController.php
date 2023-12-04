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

        $totalHarga = $keranjangs->keranjang_item->sum(function ($item) {
            return $item->menu->harga_produk;
        });

        $keranjangs->total_harga = $totalHarga;
        $keranjangs->save();

        // dd($userId);
        // dd($keranjangs);
        // dd($keranjang_items);

        return view('member.keranjang', ['keranjangs' => $keranjangs, 'keranjang_items' => $keranjang_items, 'userId' => $userId]);
    }


    public function getGrossAmount()
    {
        $userId = Auth::id();
        $keranjangs = Keranjang::with('keranjang_item')->where('user_id', $userId)->firstOrFail();
        $grossAmount = $keranjangs->keranjang_item->sum(function ($item) {
            return $item->menu->harga_produk;
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

        return $totalHarga;
    }

    // CHECKOUT
    // public function checkout(Request $request)
    // {

    //     // inisialisasi pesanan
    //     $userId = Auth::id();
    //     $phone = Auth::user()->phone_number;
    //     $totalHarga = $request->total_harga;

    //     $riwayat_pesanan = RiwayatPesanan::create([
    //         'user_id' => $userId,
    //         'total_harga' => $totalHarga,
    //         // 'note_pesanan' => $request->note_pesanan,
    //         // jovan tolong koreksi
    //         'transaction_status' => 'Unpaid',
    //         'payment_type' => 'Jovan Bank',
    //     ]);
    //     // Set your Merchant Server Key
    //     \Midtrans\Config::$serverKey = config('midtrans.server_key');
    //     // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    //     \Midtrans\Config::$isProduction = config('midtrans.is_production');
    //     // Set sanitization on (default)
    //     \Midtrans\Config::$isSanitized = true;
    //     // Set 3DS transaction for credit card to true
    //     \Midtrans\Config::$is3ds = true;

    //     $params = [
    //         'transaction_details' => [
    //             'order_id' => $riwayat_pesanan->id,
    //             'gross_amount' => $riwayat_pesanan->total_harga,
    //         ],
    //         'customer_details' => [
    //             'first_name' => Auth::user()->name,
    //             'user_id' => $userId,
    //             'phone' => $phone,
    //         ],
    //     ];

    //     $snapToken = \Midtrans\Snap::getSnapToken($params);
    //     return view('member.pembayaran', compact('snapToken', 'riwayat_pesanan'));
    // }

    // public function callback(Request $request)
    // {
    //     $serverKey = config('midtrans.server_key');
    //     $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

    //     // Memeriksa apakah hashed yang dikirim dari midtrans sama dengan yang kita buat
    //     if ($hashed == $request->signature_key) {
    //         if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
    //             $order = RiwayatPesanan::find($request->order_id);
    //             $order->update(['transaction_status' => 'Paid']);
    //         }
    //     }
    // }

    public function checkout(Request $request)
    {
        $userId = Auth::id();
        $phone = Auth::user()->phone_number;
        $totalHarga = $request->total_harga;

        $riwayat_pesanan_belum_dibayar = RiwayatPesanan::where('user_id', $userId)
            ->where('transaction_status', 'Unpaid')
            ->first();

        if ($riwayat_pesanan_belum_dibayar) {
            $riwayat_pesanan = $riwayat_pesanan_belum_dibayar;
            $order_id = $riwayat_pesanan->order_id; // Gunakan order_id yang sudah ada jika pesanan belum dibayar
        } else {
            $order_id = 'ORDER-' . uniqid() . '-' . time();

            $riwayat_pesanan = RiwayatPesanan::create([
                'user_id' => $userId,
                'total_harga' => $totalHarga,
                'transaction_status' => 'Unpaid',
                'payment_type' => 'Tes Bank',
                'order_id' => $order_id, // Simpan order_id yang baru dalam kolom order_id
            ]);
        }

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $order_id, // Gunakan order_id yang sudah ada atau baru
                'gross_amount' => $riwayat_pesanan->total_harga,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'user_id' => $userId,
                'phone' => $phone,
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('member.pembayaran', compact('snapToken', 'riwayat_pesanan'));
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
