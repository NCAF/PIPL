<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt($credentials)) {
                // Login berhasil
                return redirect('/welcome');
            } else {
                // Login gagal
                return back()->withErrors([
                    'email' => 'Password Atau Email Salah! Silahkan Check kembali.',
                ])->withInput();
            }
        } catch (\Exception $e) {
            // Capture the error and display a SweetAlert
            $error = $e->getMessage();
            return back()->withErrors(['error' => $error])->withInput();
        }
    }
}
