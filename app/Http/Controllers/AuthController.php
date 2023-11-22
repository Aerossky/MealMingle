<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function signIn()
    {
        return view('auth.signin');
    }

    public function validateSigIn(Request $request)
    {
        // dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
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

        $request->session()->regenerate();

        return $this->redirectBasedOnRole($user->role_id);
    }
    protected function loginFailedResponse()
    {
        dd('salah');
        return redirect('signIn')
            ->with('status', 'Gagal')
            ->with('message', 'Maaf username dan password salah');
    }

    protected function inactiveAccountResponse()
    {
        dd('tidak aktif');
        return redirect('signIn')
            ->with('status', 'Gagal')
            ->with('message', 'Akun anda belum aktif, silahkan hubungi admin');
    }

    //login role authentication
    protected function redirectBasedOnRole($role)
    {
        if ($role == "1") {
            // admin
            // return redirect()->intended('dashboard');
            dd('admin');
        } elseif ($role == "2") {
            // tenant
            // return redirect()->intended('member');
            dd('tenant');
        } elseif ($role == "3") {
            // customer
            // return redirect()->intended('member');
            dd('customer');
        }
    }
}
