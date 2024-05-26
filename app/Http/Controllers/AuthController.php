<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $credential = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($credential->fails()) {
            return response()->json([
                'message' => 'Gagal login',
                'errors' => $credential->errors()
            ], 422);
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;
            return response()->json([
                'message' => 'Login berhasil',
                'token' => $token,
                'data' => Auth::user()
            ]);
        }
        return response()->json([
            'message' => 'Login page',
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Logout page',
        ]);
    }
}
