<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::select('id', 'nama_tenant', 'deskripsi', 'user_id')
            ->orderBy('id', 'asc');

        return view('member.tenant.tenant', ['tenants' => $tenants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.tenant.tenant-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_tenant' => 'required',
            'deskripsi' => 'required',
            'user_id' => 'required',
            // 'picture' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        // $newName = '';
        // if ($request->file('picture')) {
        //     $extension = $request->file('picture')->getClientOriginalExtension();
        //     $newName = $request->email . '-' . now()->timestamp . '.' . $extension;
        //     $request->file('picture')->storeAs('user_picture', $newName);
        // }

        $validatedData = $validator->validated();
        // $validatedData['picture'] = $newName;
        Tenant::create($validatedData);

        return redirect()->route('tenant.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tenant = Tenant::findOrFail($id);
        $tenantId = $id;

        $menus = Menu::select('id', 'foto_produk', 'nama_makanan', 'deskripsi', 'harga_produk', 'tenant_id')
            ->orderBy('id', 'asc')
            ->where('tenant_id', $id)
            ->paginate(5);
        return view('member.tenant.detail', ['tenant' => $tenant, 'menus' => $menus, 'tenantId' => $tenantId]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tenant = Tenant::findOrFail($id);
        return view('member.tenant.tenant-edit', ['tenant' => $tenant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_tenant' => 'required',
            'deskripsi' => 'required',
            'user_id' => 'required',
            // 'picture' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        // if ($request->file('picture')) {
        //     $extension = $request->file('picture')->getClientOriginalExtension();
        //     $newName = $request->email . '-' . now()->timestamp . '.' . $extension;
        //     $request->file('picture')->storeAs('user_picture', $newName);
        // } else {
        //     $newName = null;
        // }

        $tenant = Tenant::findOrFail($id);

        // if ($user->picture && $newName) {
        //     Storage::disk('public')->delete('user_picture/' . $user->picture);
        // }

        $tenant->update([
            'nama_tenant' => $request->nama_tenant,
            'deskripsi' => $request->deskripsi,
            'user_id' => $request->user_id,
            // 'picture' => $newName ?: $user->picture,
        ]);

        return redirect()->route('tenant.index')->with('status', 'Tenant berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tenant = Tenant::findOrFail($id);
        $tenant->delete();

        return redirect()->route('tenant.index')->with('status', 'Tenant berhasil dihapus!');
    }
}
