<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return response()->json([
            'message'=>'User created successfully',
            'user'=>$user
        ],200);
    }
    public function login(Request $request)
    {
        $creds=$request->only('email','password');
        if(Auth::attempt($creds)){
            $user=Auth::user();
            $token=$user->createToken('MyAppToken')->accessToken;
            return response()->json([
                'message'=>'User login successfully',
                'user'=>$user,
                'token'=>$token
            ],200);
        }
        else{
            return response()->json([
                'message'=>'Invalid Credentials',
            ],200);
        }
    }
    public function getData(){
        $user=User::find(auth()->user()->id);
        return response()->json([
            'User'=>$user
        ],200);
    }
}
