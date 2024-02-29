<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register(RegisterUserRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $user = User::findOrFail($id);
            $user->update([
                $request->validated(),
                'status' => 'premium',
            ]
            );
            DB::commit();

        $token = $user->createToken('premium_client')->plainTextToken;

        return response()->json(['token' => $token], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 402);
        }
    }

    public function register_admin(RegisterUserRequest $request)
    {
        $user = User::create([
            'user_name' => $request->safe()->user_name,
            'password' => bcrypt($request->safe()->password),
            'gender' => $request->safe()->gender,
            'type' => 'admin',
        ]);

        $token = $user->createToken('admin')->plainTextToken;

        return response()->json(['token' => $token], 203);
    }

    public function login(LoginUserRequest $request)
    {
        $request->validate([
            'email' => 'required|string|email|exists:users,email',
            'password' => 'required|string',
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'error' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $request->user()->createToken('authToken')->plainTextToken;

        return response()->json(['token' => $token], 201);
    }


    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Successfully logged out']);
    }

}
