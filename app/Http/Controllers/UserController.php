<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Universitas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::select('id', 'name', 'email', 'status', 'universitas_id')->with('universitas')->get();
        return view('admin.user.user', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universitas = Universitas::all();
        return view('admin.user.user-add', ['universitas' => $universitas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data input pengguna
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:10|max:50',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'universitas_id' => 'required|numeric'
        ]);
        $validatedData = $validator->validated();
        $validatedData['role_id'] = 3;
        User::create($validatedData);

        //ke halaman user
        return redirect()->route('user.index')->with('status', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $data = User::with('universitas', 'role')->findOrFail($id);
        return view('admin.user.user-detail', ['user' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        $universitas = Universitas::all();
        $role = Role::all();
        return view('admin.user.user-edit', compact('user', 'universitas', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validasi hanya jika terdapat perubahan email
        if ($request->email !== $user->email) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $id,
                'password' => 'nullable|min:10|max:50',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',
                'status' => 'required',
                'universitas_id' => 'required|numeric',
                'role_id' => 'required|numeric',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        } else {
            // Jika tidak ada perubahan email, validasi tanpa aturan unique untuk email
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'nullable|min:10|max:50',
                'jenis_kelamin' => 'required',
                'alamat' => 'required',
                'status' => 'required',
                'universitas_id' => 'required|numeric',
                'role_id' => 'required|numeric',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }

        // Menggunakan password baru jika diisi, atau tetap menggunakan password lama
        $password = !empty($request->password) ? Hash::make($request->password) : $user->password;

        // Menentukan kolom yang akan diperbarui
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'status' => $request->status,
            'universitas_id' => $request->universitas_id,
            'role_id' => $request->role_id,
        ]);

        // Redirect atau response lainnya setelah perbarui data
        return redirect()->route('user.index')->with('success', 'Pengguna berhasil diperbarui.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Melakukan Soft Delete
        $user->delete();

        return redirect()->route('user.index')->with('status', 'Data user berhasil dihapus!');
    }

    // SOFT DELETE
    public function deletedData()
    {
        $user = User::onlyTrashed()->get();
        return view('admin.user.user-deleted', compact('user'));
    }

    public function restore($id)
    {
        $user = User::onlyTrashed()->where('id', $id)->first();
        $user->restore();

        // redirect
        return redirect()->route('user.index');
    }

    // Delete restore data
    public function forceDelete($id){
        User::onlyTrashed()->where('id', $id)->forceDelete();

        // redirect
        return redirect()->route('user.index');
    }
}
