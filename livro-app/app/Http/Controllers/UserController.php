<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index()
    {
        if (Auth::guard('api')->check()) {
            $users = User::all();
            return response()->json($users);
        } else {
            return response()->json(['message' => 'Usuário não autenticado'], 401);
        }
    }
    


    public function store(Request $request)
{
    
}

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function update(Request $request, string $id)
{
    $user = User::findOrFail($id);
    $user->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'password' => Hash::make($request->input('password'))
    ]);

    $token = $user->createToken('auth_token')->plainTextToken;
    $user->api_token = $token;
    $user->save();

    return response()->json(['user' => $user, 'token' => $token]);
}


    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(null, 204);
    }

}

