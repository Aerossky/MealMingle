<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\User;
use App\Models\Tenant;
use App\Models\Universitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenants = Tenant::select('id', 'nama_tenant', 'deskripsi', 'foto_tenant', 'user_id')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.tenant.tenant', ['tenants' => $tenants]);
    }

    public function totalTenant()
    {
        $totalTenants = Tenant::count();
        Session::put('totalTenants', $totalTenants);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();

        $universitas = Universitas::select('id', 'universitas_name')
            ->orderBy('id', 'asc')
            ->get();

        return view('admin.tenant.tenant-add', ['users' => $users, 'universitas' => $universitas]);
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
            'foto_tenant' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'universitas_id' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        $newName = '';
        if ($request->file('foto_tenant')) {
            $extension = $request->file('foto_tenant')->getClientOriginalExtension();
            $newName = $request->nama_tenant . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto_tenant')->storeAs('tenant/', $newName);
        }

        $validatedData = $validator->validated();
        $validatedData['foto_tenant'] = $newName;

        $tenant = Tenant::create($validatedData);
        $tenant->universitas()->attach($request->input('universitas_id'));

        $this->totalTenant();

        return redirect()->route('tenant.index')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tenant = Tenant::findOrFail($id);
        $tenantId = $id;

        // Filter showMenu based on tenant_id
        $showMenu = Menu::select('id', 'nama_makanan', 'deskripsi', 'harga_produk', 'hari', 'foto_produk', 'tenant_id')
            ->orderBy('id', 'asc')
            ->where('tenant_id', $id)
            ->with('kategori')
            ->get();

        return view('admin.tenant.tenant-detail', ['tenant' => $tenant, 'showMenu' => $showMenu, 'tenantId' => $tenantId]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::select('id', 'name')
            ->orderBy('id', 'asc')
            ->get();

        $universitas = Universitas::select('id', 'universitas_name')
            ->orderBy('id', 'asc')
            ->get();

        $tenant = Tenant::findOrFail($id);
        return view('admin.tenant.tenant-edit', ['tenant' => $tenant, 'users' => $users, 'universitas' => $universitas]);
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
            'foto_tenant' => 'image|mimes:jpg,png,jpeg|max:2048',
            'universitas_id' => 'required|array',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator);
        }

        if ($request->file('foto_tenant')) {
            $extension = $request->file('foto_tenant')->getClientOriginalExtension();
            $newName = $request->nama_tenant . '-' . now()->timestamp . '.' . $extension;
            $request->file('foto_tenant')->storeAs('tenant', $newName);
        } else {
            $newName = null;
        }

        $tenant = Tenant::findOrFail($id);

        if ($tenant->foto_tenant && $newName) {
            Storage::disk('public')->delete('tenant/' . $tenant->foto_tenant);
        }

        $tenant->update([
            'nama_tenant' => $request->nama_tenant,
            'deskripsi' => $request->deskripsi,
            'user_id' => $request->user_id,
            'foto_tenant' => $newName ?: $tenant->foto_tenant,
        ]);

        $tenant->universitas()->sync($request->input('universitas_id'));

        return redirect()->route('tenant.index')->with('success', 'Tenant berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tenant = Tenant::findOrFail($id);
        // Hapus foto jika ada
        if ($tenant->foto_tenant) {
            $fotoPath = 'tenant/' . $tenant->foto_tenant;

            if (Storage::disk('public')->exists($fotoPath)) {
                Storage::disk('public')->delete($fotoPath);
            }
        }

        $tenant->delete();
        $this->totalTenant();

        return redirect()->route('tenant.index')->with('success', 'Tenant berhasil dihapus!');
    }
}
