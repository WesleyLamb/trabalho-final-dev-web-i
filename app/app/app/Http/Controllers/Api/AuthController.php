<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function show(Request $request)
    {
        return new UserResource($request->user());
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, !!$request->input('remember'))) {
            $user = User::find(Auth::user()->id);
            $token = $user->createToken('auth_token')->plainTextToken;
            if (!$request->query('redirect')) {
                return response()->json(['data' => [
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                    'user' => new UserResource($user)
                ]]);
            } else {
                return response()->redirectTo($request->input('redirect'));
            }
        }

        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }
}
