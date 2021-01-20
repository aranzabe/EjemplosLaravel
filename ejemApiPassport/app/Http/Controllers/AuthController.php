<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {

    //
    public function register(Request $request) {
        //return response()->json([$request->all()]);
//        $validatedData = $request->validate([
//            'name' => 'required|max:55',
//            'email' => 'email|required|unique:users',
//            'password' => 'required|confirmed'
//        ]);

        if (User::where('email', $request->get('email'))->count() == 1) {
            return response()->json(['message' => 'Registro incorrecto. Revise las credenciales.', 'code' => 400], 400);
        }
        
        $validatedData = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];

        $validatedData['password'] = Hash::make($request->password);

        $user = User::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        //return response(['user' => $user, 'access_token' => $accessToken], 201);
        return response()->json(['message' => ['user' => $user, 'access_token' => $accessToken], 'code' => 201], 201);
    }

    public function login(Request $request) {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            //return response(['message' => 'Login incorrecto. Revise las credenciales.'], 400);
            return response()->json(['message' => 'Login incorrecto. Revise las credenciales.', 'code' => 400], 400);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        //return response(['user' => auth()->user(), 'access_token' => $accessToken]);
        return response()->json(['message' => ['user' => auth()->user(), 'access_token' => $accessToken], 'code' => 200], 200);
    }

}
