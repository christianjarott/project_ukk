<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Login:
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (!Auth::attempt($credentials)) {
            return response()->json(['message' => 'Login gagal'], 401);
        }

        $user = $request->user();
        $token = $user->createToken('api-token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user
        ]);
    }
    //Register:
    public function register(RegisterRequest $request)
    {
		    // Membuat record User baru dan menyimpan di database
        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => Carbon::now(),
        ]);

				// Sekalian langsung login
        Auth::login($newUser);

        $token = $newUser->createToken('lulus-semua')->plainTextToken;
        return response()->json([
            'user' => $newUser,
            'token' => $token,
            'message' => 'Register Berhasil'
        ]);
    }
    //Logout:
    public function logout(Request $request)
    {
        if($request->user()){
            $request->user()->currentAccessToken()->delete();
        }

        return response()->json([
            'message' => 'Logout Berhasil'
        ], 204);
    }

}
