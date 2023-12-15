<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login (Request $request): JsonResponse
    {
        
        $user = User::where('email', $request->email) -> first();

        if (Hash::check($request->password, $user->password)) {
            return response()->json([
                'token' => $user->createToken(time())->plainTextToken
            ]);
        }
    }

    public function validation (): JsonResponse
    {
        return response()->json([
            'message' => 'Vous êtes connecté'
        ]);
    }
}
