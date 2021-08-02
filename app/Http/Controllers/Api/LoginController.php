<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request){
        $login = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string'

        ]);

        if (!Auth::attempt( $login)){
            return response(['message'=>'Неправильные учетные данные']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response(['user'=> Auth::user(), 'access_token' => $accessToken]);

    }
}
