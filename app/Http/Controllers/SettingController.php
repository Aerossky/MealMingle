<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Universitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::with('universitas')->find(auth()->user()->id);
        $universitas = Universitas::all();
        return view('member.setting', compact('user', 'universitas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // user id
        $id = auth()->user()->id;

        $user = User::findOrFail($id);

        // Validasi data input pengguna
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone_number' => 'required|numeric|unique:users,phone_number,' . $id . ',id',
            'password' => 'nullable|min:10|max:50',
            'universitas_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        // Menggunakan password baru jika diisi, atau tetap menggunakan password lama
        $password = !empty($request->password) ? Hash::make($request->password) : $user->password;

        // Menentukan kolom yang akan diperbarui
        $user->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'password' => $password,
            'status' => $user->status,
            'universitas_id' => $request->universitas_id,
            'role_id' => $user->role_id,
        ]);

        // Redirect atau response lainnya setelah perbarui data
        return redirect()->route('member.dashboard')->with('success', 'Data Anda berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
