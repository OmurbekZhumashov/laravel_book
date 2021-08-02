<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\User;

class LoginController extends Controller
{
    public function login(Request $request){
       if(Auth::attempt([
           'email' => $request->email, 
            'password' => $request->password]))
       {
           $user = Auth::user();
           $resArr=[];
           $resArr['token']=$user->createToken('api-application')->accessToken;
           $resArr['name']=$user->name;
           return response()->json($resArr,200);

       }else{
           return response()->json(['error'=>'Неправильные учетные данные'],200);
       }

    }
}
