<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Models\RiwayatPesanan;
use App\Models\RiwayatPesananItem;
use Illuminate\Support\Facades\Validator;

class RiwayatPesananItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $riwayat_pesanan_items = RiwayatPesananItem::select('id', 'jumlah', 'riwayat_pesanan_id', 'menu_id')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.riwayatpesanan.riwayatpesanan-detail', ['riwayat_pesanan_items' => $riwayat_pesanan_items]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $riwayat_pesanans = RiwayatPesanan::select('id', 'transaction_status')
            ->orderBy('id', 'asc')
            ->get();

        $menus = Menu::select('id', 'nama_makanan')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.riwayatpesanan.riwayatpesanan-add', ['riwayat_pesanans' => $riwayat_pesanans, 'menus' => $menus]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'jumlah' => 'required',
            'riwayat_pesanan_id' => 'required',
            'menu_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $validatedData = $validator->validated();
        RiwayatPesananItem::create($validatedData);

        return redirect()->route('riwayatpesanan.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $riwayat_pesanan_item = RiwayatPesananItem::findOrFail($id);
        $riwayat_pesanan_item_Id = $id;

        return view('admin.riwayatpesanan.riwayatpesanan-detail', ['riwayat_pesanan_item' => $riwayat_pesanan_item, 'riwayat_pesanan_item_Id' => $riwayat_pesanan_item_Id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $riwayat_pesanans = RiwayatPesanan::select('id', 'transaction_status')
            ->orderBy('id', 'asc')
            ->get();

        $menus = Menu::select('id', 'nama_makanan')
            ->orderBy('id', 'asc')
            ->get();

        $riwayat_pesanan_item = RiwayatPesananItem::findOrFail($id);
        return view('admin.riwayatpesanan.riwayatpesanan-edit', ['riwayat_pesanan_item' => $riwayat_pesanan_item, 'riwayat_pesanans' => $riwayat_pesanans, 'menus' => $menus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'jumlah' => 'required',
            'riwayat_pesanan_id' => 'required',
            'menu_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $riwayat_pesanan_item = RiwayatPesananItem::findOrFail($id);

        $riwayat_pesanan_item->update([
            'jumlah' => $request->jumlah,
            'riwayat_pesanan_id' => $request->riwayat_pesanan_id,
            'menu_id' => $request->menu_id,
        ]);

        return redirect()->route('riwayatpesanan.index')->with('status', 'Riwayat pesanan item berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $riwayat_pesanan_item = RiwayatPesananItem::findOrFail($id);
        $riwayat_pesanan_item->delete();

        return redirect()->route('riwayatpesanan.index')->with('status', 'Riwayat pesanan item berhasil diperbarui!');
    }
}
