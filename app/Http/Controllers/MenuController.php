<?php

namespace App\Http\Controllers;

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
        return view('admin.menu.menu-add', ['tenantId' => $tenantId]);
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
            // 'foto_produk' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'foto_produk' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect()
        //         ->back()
        //         ->withInput()
        //         ->withErrors($validator);
        // }

        $newName = '';
        if ($request->file('foto_produk')) {
            $extension = $request->file('foto_produk')->getClientOriginalExtension();
            $newName = 'produk-' . now()->timestamp . '.' . $extension;
            $request->file('foto_produk')->storeAs('produk', $newName);
        } else {
            $newName = "belum ada foto";
        }

        $validatedData = $validator->validated();
        $validatedData['foto_produk'] = $newName;
        $validatedData['tenant_id'] = $id;
        Menu::create($validatedData);

        // return view('tenant.show', ['tenantId' => $id]);
        return redirect()->route('tenant.show', $id);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $showMenu = Menu::select('id', 'nama_makanan', 'deskripsi', 'harga_produk', 'hari', 'foto_produk', 'tenant_id')->get();
        $filterdata = Kategori::all();
        return view('member.listmenu', ['allmenu' => $showMenu, 'allfilter' => $filterdata]);
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
            ->select('id', 'nama_makanan', 'deskripsi', 'harga_produk', 'hari', 'foto_produk', 'tenant_id')
            ->get();
    } else {
        // Jika tidak ada filter dipilih, ambil semua menu
        $filteredMenu = Menu::select('id', 'nama_makanan', 'deskripsi', 'harga_produk', 'hari', 'foto_produk', 'tenant_id')->get();
    }
    if($filterSearch){
        $query = Menu::select('id', 'nama_makanan', 'deskripsi', 'harga_produk', 'hari', 'foto_produk', 'tenant_id');
        $query->where('nama_makanan', 'like', '%' . $filterSearch . '%');
        $filteredMenu = $query->get();
    }

    return view('member.listmenu', ['allmenu' => $filteredMenu, 'allfilter' => $filterdata]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($tenantId, $menuId)
    {
        $menu = Menu::findOrFail($menuId);
        return view('admin.menu.menu-edit', ['menu' => $menu, 'tenantId' => $tenantId, 'menuId' => $menuId]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, $tenantId)
    {
        $validator = Validator::make($request->all(), [
            'nama_makanan' => 'required',
            'deskripsi' => 'required',
            'harga_produk' => 'required',
            // 'foto_produk' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'foto_produk' => 'required',
        ]);

        // if ($validator->fails()) {
        //     return redirect()
        //         ->back()
        //         ->withInput()
        //         ->withErrors($validator);
        // }

        if ($request->file('foto_produk')) {
            $extension = $request->file('foto_produk')->getClientOriginalExtension();
            $newName = 'produk-' . now()->timestamp . '.' . $extension;
            $request->file('foto_produk')->storeAs('produk', $newName);
        } else {
            // $newName = null;
            $newName = "belum ada foto";
        }

        $menu = Menu::findOrFail($id);

        // if ($menu->foto_produk && $newName) {
        //     Storage::disk('public')->delete('produk/' . $menu->foto_produk);
        // }

        $menu->update([
            'nama_makanan' => $request->nama_makanan,
            'deskripsi' => $request->deskripsi,
            'harga_produk' => $request->harga_produk,
            // 'foto_produk' => $newName ?: $menu->foto_produk,
            'foto_produk' => $newName,
        ]);

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
        Menu::onlyTrashed()->where('id', $id)->forceDelete();

        // redirect
        return redirect()->route('tenant.show', $tenantId);
    }
}
