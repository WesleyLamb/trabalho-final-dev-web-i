<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json(['data' => [
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => new UserResource($user)
            ]]);
        }

        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }
}
