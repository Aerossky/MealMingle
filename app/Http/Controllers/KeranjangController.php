<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use App\Models\KeranjangItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

        // dd($userId);
        // dd($keranjangs);
        // dd($keranjang_items);

        return view('member.keranjang', ['keranjangs' => $keranjangs, 'keranjang_items' => $keranjang_items, 'userId' => $userId]);
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
