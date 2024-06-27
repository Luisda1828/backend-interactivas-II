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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    public function login(Request $request){

        $user=User::select('user_user_name','user_password')->where('user_user_name',$request->user)->first();
        if($user){
        if(!Hash::check($request->password, $user->user_password)){
            return response(['message'=>'Invalid credentials'],Response::HTTP_UNAUTHORIZED);
        }
        $user=User::select('user_id')->where('user_user_name',$request->user)->first();
        $token = $user->createToken('Token')->plainTextToken;

        return response()->json([
            'success' => true,
            'token' => $token]);
        }else{
            return response(['message'=>'Invalid credentials'],Response::HTTP_UNAUTHORIZED);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Destruir la cookie 'nombre_de_la_cookie'
        Cookie::queue(Cookie::forget('cookieAdm'));

        // Redireccionar o retornar una respuesta
        return redirect()->route('auth.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $user = User::select('user_user_name', 'user_password')->where('user_user_name', $request->usuario)->first();

    if ($user) {
        if (!Hash::check($request->contrasena, $user->user_password)) {
            $message = 'Usuario o contraseña incorrectos';
            return view('login', compact('message'));
        }
        $user = User::select('user_id', 'user_name')->where('user_user_name', $request->usuario)->first();
        $type = User::select('id_type')->where('user_user_name', $request->usuario)->first();
        $token = $user->createToken('Token')->plainTextToken;

        if ($type->id_type == 2) {
            $message = 'No tienes permitido ingresar a esta sección';
            return view('login', compact('message'));
        }

        // Crear un array para almacenar la información de la cookie
        $cookieData = [
            'token' => $token,
            'username' => $user->user_name
        ];
        
        // Convertir el array a JSON
        $cookieValue = json_encode($cookieData);

        // Crear la cookie
        return redirect()->route('home.index')->withCookie(cookie('cookieAdm', $cookieValue));
    } else {
        $message = 'Usuario o contraseña incorrectos';
        return view('login', compact('message'));
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
