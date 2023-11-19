<?php

namespace App\Http\Controllers;

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
        $user = User::select('id', 'name', 'email', 'status', 'universitas_id')->with('universitas')->where('role_id', '!=', 1)->get();
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
            'password' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'universitas_id' => 'required|numeric'
        ]);
        $validatedData = $validator->validated();
        $validatedData['role_id'] = 3;
        User::create($validatedData);

        //ke halaman login
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
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
