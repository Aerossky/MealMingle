<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\KeranjangItem;
use Illuminate\Support\Facades\Validator;

class KeranjangItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keranjang_items = KeranjangItem::select('id', 'jumlah', 'harga_item', 'note_item', 'keranjang_id')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.keranjang.keranjang-detail', ['keranjang_items' => $keranjang_items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $keranjangs = Keranjang::select('id', 'transaction_status')
            ->orderBy('id', 'asc')
            ->get();

        $menus = Menu::select('id', 'nama_makanan')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.keranjang.keranjang-add', ['keranjangs' => $keranjangs, 'menus' => $menus]);
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
    public function show(KeranjangItem $keranjangItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KeranjangItem $keranjangItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KeranjangItem $keranjangItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KeranjangItem $keranjangItem)
    {
        //
    }
}
