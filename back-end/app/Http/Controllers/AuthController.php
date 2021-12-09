<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $fields['name'],
            'username' => $fields['username'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password'])
        ]);

        $token = $user->createToken('appToken')->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    public function login(Request $request)
    {
        $fields = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::where("email", $fields['email'])->first();

        if (!$user || Hash::check($fields['password'], $user->password)) {
            return response([
                "message" => "Invalid Email or Password!"
            ], 401);
        }

        $token = $user->createToken('appToken')->plainTextToken;

        return response([
            "user" => $user,
            "token"=> $token
        ], 201);
    }
}
