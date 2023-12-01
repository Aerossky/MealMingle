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
        $validator = Validator::make($request->all(), [
            'jumlah' => 'required',
            'harga_item' => 'required',
            'note_item' => 'required',
            'keranjang_id' => 'required',
            'menu_id' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $validatedData = $validator->validated();

        $keranjang_item = KeranjangItem::create($validatedData);
        $keranjang_item->menu()->attach($request->input('menu_id'));

        return redirect()->route('keranjang.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $keranjang_item = KeranjangItem::findOrFail($id);
        $keranjang_item_Id = $id;

        return view('admin.keranjang.keranjang-detail', ['keranjang_item' => $keranjang_item, 'keranjang_item_Id' => $keranjang_item_Id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $keranjangs = Keranjang::select('id', 'user_id')
            ->orderBy('id', 'asc')
            ->get();

        $menus = Menu::select('id', 'nama_makanan')
            ->orderBy('id', 'asc')
            ->get();

        $keranjang_item = KeranjangItem::findOrFail($id);
        return view('admin.keranjang.keranjang-edit', ['keranjang_item' => $keranjang_item, 'keranjangs' => $keranjangs, 'menus' => $menus]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'jumlah' => 'required',
            'harga_item' => 'required',
            'note_item' => 'required',
            'keranjang_id' => 'required',
            'menu_id' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $keranjang_item = KeranjangItem::findOrFail($id);

        $keranjang_item->update([
            'jumlah' => $request->jumlah,
            'harga_item' => $request->harga_item,
            'note_item' => $request->note_item,
            'keranjang_id' => $request->keranjang_id,
        ]);

        $keranjang_item->menu()->sync($request->input('menu_id'));

        return redirect()->route('keranjang.index')->with('status', 'Keranjang item berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keranjang_item = KeranjangItem::findOrFail($id);
        $keranjang_item->delete();

        return redirect()->route('keranjang.index')->with('status', 'Keranjang item berhasil diperbarui!');
    }
}
