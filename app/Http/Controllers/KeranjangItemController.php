<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\KeranjangItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class KeranjangItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keranjang_items = KeranjangItem::select('id', 'jumlah', 'note_item', 'keranjang_id', 'menu_id')
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

    public function tambah(Request $request, string $id)
    {
        $userId = Auth::id();
        $keranjangs = Keranjang::all()->where('user_id', $userId)->firstOrFail();

        $jumlah = $request->input('jumlah');
        $note_item = $request->input('note_item');
        $hari = $request->hari;

        $existingItem = KeranjangItem::where('keranjang_id', $keranjangs->id)
            ->where('menu_id', $id)
            ->first();

        if ($existingItem) {
            $existingItem->jumlah += $jumlah;
            $existingItem->save();
        } else {
            KeranjangItem::create([
                'jumlah' => $jumlah,
                'note_item' => $note_item,
                'keranjang_id' => $keranjangs->id,
                'menu_id' => $id,
                'waktu_pengiriman' => $hari,
            ]);
        }

        $this->keranjangItem();
        $this->getTotalHarga();

        return redirect()->route('keranjang.indexuser');
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

    public function keranjangItem()
    {
        $userId = Auth::id();
        $keranjangs = Keranjang::with('keranjang_item')->where('user_id', $userId)->firstOrFail();
        $keranjang_items = $keranjangs->keranjang_item;
        $itemCount = $keranjang_items->count();
        Session::put('itemCount', $itemCount);
    }

    public function hapus()
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
            'note_item' => 'required',
            'keranjang_id' => 'required',
            'menu_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $validatedData = $validator->validated();
        KeranjangItem::create($validatedData);

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
            'note_item' => 'required',
            'keranjang_id' => 'required',
            'menu_id' => 'required',
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
            'note_item' => $request->note_item,
            'keranjang_id' => $request->keranjang_id,
            'menu_id' => $request->menu_id,
        ]);

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
