<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $request->email)->first();

        // Cek apakah user ditemukan dan password cocok
        if ($user && Hash::check($request->password, $user->password)) {
            // Buat token untuk user
            $token = $user->createToken('BeritaAppToken')->plainTextToken;

            return response()->json([
                'token' => $token,
                'message' => 'Login successful'
            ]);
        }

        return response()->json(['message' => 'Invalid credentials'], 401);
    }
}
