<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Keranjang;
use App\Models\Universitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\KeranjangController;
use Symfony\Component\HttpFoundation\RedirectResponse;


class   AuthController extends Controller
{
    //sign in
    public function signIn()
    {
        return view('auth.signin');
    }

    public function validateSigIn(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'phone_number' => ['required', 'numeric'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return $this->loginFailedResponse();
        }

        $user = Auth::user();

        if ($user->status != 'aktif') {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            return $this->inactiveAccountResponse();
        }

        // generate session
        $keranjangController = new KeranjangController();
        $keranjangController->keranjangItem();

        $request->session()->regenerate();

        return $this->redirectBasedOnRole($user->role_id);
    }
    protected function loginFailedResponse()
    {
        return redirect('/signin')
            ->with('status', 'Gagal')
            ->with('message', 'Maaf username dan password salah')
            ->withInput();
    }

    protected function inactiveAccountResponse()
    {
        return redirect('/signin')
            ->with('status', 'Gagal')
            ->with('message', 'Akun anda belum aktif, silahkan hubungi admin');
    }

    //login role authentication
    protected function redirectBasedOnRole($role)
    {
        if ($role == "1") {
            // admin
            return redirect()->intended('/admin-dashboard');
        } elseif ($role == "2") {
            // tenant
            return redirect()->intended('/tenant-dashboard');
        } elseif ($role == "3") {
            // member
            return redirect()->intended('/');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // flush session
        $request->session()->flush();

        return redirect('/');
    }

    // sign up
    public function signUp()
    {
        // ambil data universitas
        $universitas = Universitas::all();
        return view('auth.signup', ['options' => $universitas]);
    }

    // sign up a user
    public function storeData(Request $request)
    {
        // Validasi data input pengguna
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'email' => 'required|unique:users',
            'phone_number' => 'required|unique:users',
            'password' => 'required|min:8|max:50',
        ]);
        $validatedData = $validator->validated();
        $validatedData['role_id'] = 3;
        $validatedData['universitas_id'] = $request->universitas;
        $user = User::create($validatedData);
        // $user;
        $userId = $user->id;

        Keranjang::create([
            'user_id' => $userId,
        ]);

        //ke halaman login
        return redirect()->route('signIn')->with('status', 'Data berhasil ditambahkan!');
    }
}
