<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Coockie;

class AuthController extends Controller
{
    public function login(Request $request){
        $salt = md5('EstoEsUnSalt');
        $user=User::select('user_user_name','user_password')->where('user_user_name',$request->usuario)->first();
        if($user!=null){
            if($user->user_password==md5($request->contrasena.''.$salt)){
                $userId=User::select('user_id')->where('user_user_name',$request->usuario)->first();
                //  return 'Usuario autenticado';
                 return redirect()->to('http://localhost:5174/vinx')->cookie('Sesion',$userId,10);
                
            }else{
                return redirect()->to('http://localhost:5174');
            }
        }else{
            return redirect()->to('http://localhost:5174');
        }
        
    }
}
