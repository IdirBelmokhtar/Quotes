<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Models\Quote;
use App\Models\Category;
use App\Models\Theme;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB; // Import the DB class
class AuthController extends Controller
{
        public function register(RegisterUserRequest $request)
    {   
        DB::beginTransaction();
        // Get the authenticated user's ID
        $userId = $request->user()->id;
        // Find the user by ID
        $user = User::findOrFail($userId);
        // Update the 'is_free' attribute
        $user->update([
            'status' => 'premium', // Set the value to true or false as needed
        ]);
        

        $token = $user->createToken('fan')->plainTextToken;
        return response()->json(['token' => $token], 201);
    }


    public function register_admin(RegisterUserRequest $request)
    {
        $user = User::create([
            'user_name' => $request->safe()->user_name,
            'email' => $request->safe()->email,
            'password' => bcrypt($request->safe()->password),
        ]);

        $token = $user->createToken('admin')->plainTextToken;
        $quote = Quote::all()->random(); // Get a random quote
        $categories = Category::all(); // Get all categories
        $themes = Theme::all(); // Get all themes

        return response()->json([
            'token' => $token,
            'quote' => $quote,
            'categories' => $categories,
            'themes' => $themes
        ], 201);
    }
    public function login(LoginUserRequest $request)
    {   
        return 1;
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $request->user()->createToken('authToken')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }


    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Successfully logged out']);
    }

}
