<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'user' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = request(['user', 'password']);

        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 201);

        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');

        $token = $tokenResult->token;
        $token->save();

        return redirect()->route('reception');
        /*return response()->json([
            'user' => $user, 
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($token->expires_at)->toDateTimeString()
        ]);*/
    }
    
    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'user' => 'required',
            'password' => 'required|string'
        ]);

        User::create([
            'name' => $request->name,
            'user' => $request->user,
            'password' => bcrypt($request->password),
            'ced' => $request->ced,
            'school' => $request->school,
            'regssa' => $request->regssa,
            'type' => $request->type
        ]);

        /*return response()->json([
            'message' => 'Successfully created user!'
        ], 201);*/

        return redirect()->route('users');
    }

    public function deleteUser(Request $request){
        $user = User::find($request->id);
        $user->delete();
        return $user;
    }
}
