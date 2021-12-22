<?php

namespace App\Http\Controllers;

use App\Models\User;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TokenController extends Controller
{
    public function gerarToken(Request $request)
    {
        $this->validate($request, 
            [
                'email' => 'required|email',
                'password' => 'requird'
            
            ]
        );

        $usuario = User::where('email', $request->email);

        
        if (is_null($usuario) || Hash::check($request->password, $usuario->password)) {
           return response()->json('', 401);
        }

        JWT::encode(['email' => $$request->email], env('JWT_KEY'));

        return['access_token' => $token];

    }
}