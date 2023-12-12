<?php

namespace App\Http\Controllers;

use App\Models\JadwalPengiriman;
use App\Models\Menu;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id, $menuId)
    {
        $menu = Menu::findOrFail($menuId);

        return view('admin.menu.menu-detail', [
            'menu' => $menu,
            'tenantId' => $id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($tenantId)
    {
        // kategori menu
        $kategori = Kategori::all();
        $jadwal = JadwalPengiriman::all();
        return view('admin.menu.menu-add', ['tenantId' => $tenantId, 'kategori' => $kategori, 'jadwal' => $jadwal]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_makanan' => 'required',
            'deskripsi' => 'required',
            'harga_produk' => 'required',
            'foto_produk' => 'required',
            // 'foto_produk' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $foto = '';
        if ($request->file('foto_produk')) {
            $extension = $request->file('foto_produk')->getClientOriginalExtension();
            $foto = $request->nama_makanan . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto_produk')->storeAs('menu/', $foto);
        } else {
            $foto = "belum ada foto";
        }

        $validatedData = $validator->validated();
        $validatedData['foto_produk'] = $foto;
        $validatedData['tenant_id'] = $id;

        Menu::create($validatedData);

        // menambahkan relasi kategori
        $menu = Menu::latest()->first();
        $menu->kategori()->attach($request->kategori);

        // menambahkan relasi jadwal pengiriman
        $menu->jadwal_pengiriman()->attach($request->jadwal);

        return redirect()->route('tenant.show', $id);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $showMenu = Menu::select('id', 'nama_makanan', 'deskripsi', 'harga_produk', 'foto_produk', 'tenant_id')->get();
        $filterdata = Kategori::all();
        return view('member.listmenu', ['allmenu' => $showMenu, 'allfilter' => $filterdata]);
    }

    public function showDetail(string $id)
    {
        $menu = Menu::with('jadwal_pengiriman')->findOrFail($id);
        $filterdata = Kategori::all();
        return view('member.listmenu-detail', ['menu' => $menu, 'allfilter' => $filterdata]);
    }

    public function showFiltered(Request $request)
    {
        // Ambil nilai filter dari input (ID kategori)
        $filterId = $request->input('filter');
        $filterSearch = $request->input('search');

        // Ambil semua data kategori untuk dropdown filter
        $filterdata = Kategori::all();

        // Ambil menu terkait dengan kategori yang dipilih
        $filteredMenu = collect();

        if ($filterId != "all") {
            // Ambil data dari tabel pivot berdasarkan ID kategori
            $pivotData = DB::table('menu_kategori')
                ->where('kategori_id', $filterId)
                ->select('menu_id')
                ->get();

            // Ambil menu berdasarkan id dari hasil tabel pivot
            $filteredMenu = Menu::whereIn('id', $pivotData->pluck('menu_id'))
                ->select('id', 'nama_makanan', 'deskripsi', 'harga_produk', 'foto_produk', 'tenant_id')
                ->get();
        } else {
            // Jika tidak ada filter dipilih, ambil semua menu
            $filteredMenu = Menu::select('id', 'nama_makanan', 'deskripsi', 'harga_produk', 'foto_produk', 'tenant_id')->get();
        }
        if ($filterSearch) {
            $query = Menu::select('id', 'nama_makanan', 'deskripsi', 'harga_produk', 'foto_produk', 'tenant_id');
            $query->where('nama_makanan', 'like', '%' . $filterSearch . '%');
            $filteredMenu = $query->get();
        }

        return view('member.listmenu', ['allmenu' => $filteredMenu, 'allfilter' => $filterdata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($menuId, $tenantId)
    {
        $menu = Menu::findOrFail($menuId);
        $kategori = Kategori::all();
        $jadwal = JadwalPengiriman::all();
        return view('admin.menu.menu-edit', ['menu' => $menu, 'tenantId' => $tenantId, 'menuId' => $menuId, 'kategori' => $kategori, 'jadwal' => $jadwal]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, $tenantId)
    {
        $validator = Validator::make($request->all(), [
            'nama_makanan' => '',
            'deskripsi' => '',
            'harga_produk' => '',
            'foto_produk' => 'image|mimes:jpg,png,jpeg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $menu = Menu::findOrFail($id);

        if ($request->file('foto_produk')) {
            $extension = $request->file('foto_produk')->getClientOriginalExtension();
            $foto = $request->nama_makanan . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto_produk')->storeAs('menu/', $foto);

            if ($menu->foto_produk) {
                Storage::disk('public')->delete('menu/' . $menu->foto_produk);
            }
        } else {
            // foto tidak diupdate, retain the existing image
            $foto = $menu->foto_produk; // Set the variable $foto to the existing image filename
        }

        $menu->update([
            'nama_makanan' => $request->nama_makanan,
            'deskripsi' => $request->deskripsi,
            'harga_produk' => $request->harga_produk,
            'foto_produk' => $foto ?: $menu->foto_produk,
        ]);

        // update relasi kategori
        if ($request->kategori) {
            $menu->kategori()->sync($request->kategori);
        }

        // update relasi jadwal pengiriman
        if ($request->jadwal) {
            $menu->jadwal_pengiriman()->sync($request->jadwal);
        }

        return redirect()->route('tenant.show', $tenantId);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($menuId, $tenantId)
    {
        $menu = Menu::findOrFail($menuId);

        //melakukan soft delete menu
        $menu->delete();

        return redirect()->route('tenant.show', $tenantId);
    }

    // SOFT DELETE
    public function deletedData($tenantId)
    {
        $menuTrashed = Menu::onlyTrashed()->get();
        return view('admin.menu.menu-deleted', ['menuTrashed' => $menuTrashed, 'tenantId' => $tenantId]);
    }

    public function restore($tenantId, $id)
    {
        $menuTrashed = Menu::onlyTrashed()->where('id', $id)->first();
        $menuTrashed->restore();

        // redirect
        return redirect()->route('tenant.show', $tenantId);
    }

    // Delete restore data
    public function forceDelete($tenantId, $id)
    {
        $menu = Menu::withTrashed()->findOrFail($id);

        // Hapus foto jika ada
        if ($menu->foto_produk) {
            $fotoPath = 'menu/' . $menu->foto_produk;

            if (Storage::disk('public')->exists($fotoPath)) {
                Storage::disk('public')->delete($fotoPath);
            }
        }

        // Hapus record dari database secara permanen
        $menu->forceDelete();

        // Hapus relasi kategori
        $menu->kategori()->detach();
        $menu->jadwal_pengiriman()->detach();

        return redirect()->route('tenant.show', $tenantId);
    }
}
