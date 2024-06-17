<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){

        $user=User::select('user_user_name','user_password')->where('user_user_name',$request->user)->first();
        if(!Hash::check($request->password, $user->user_password)){
            return response(['message'=>'Invalid credentials'],Response::HTTP_UNAUTHORIZED);
        }
        $user=User::select('user_id')->where('user_user_name',$request->user)->first();
        $token = $user->createToken('Token')->plainTextToken;

        return response()->json([
            'success' => true,
            'token' => $token]);
        
    }
}
