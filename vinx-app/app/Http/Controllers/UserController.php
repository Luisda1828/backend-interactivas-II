<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Store the image in public storage
        $imageName = $request->image->getClientOriginalName();
        $imageName = str_replace(' ', '_', $imageName);
        $request->image->storeAs('public/images_events', $imageName);

        $newUser=User::create([
            'user_name'=>$request->nombre,
            'user_lastname'=>$request->apellido,
            'user_user_name'=>$request->usuario,
            'user_email'=>$request->correo,
            'user_img'=>$imageName,
            'user_password' => Hash::make($request->contrasena),
            'user_career'=>$request->carrera,
            'user_studentCarne'=>$request->carnet,
            'user_illness'=>$request->user_illness.' '.$request->disease_name,
            'sleep_time'=>$request->sleep,
            'excercise_time'=>$request->activity,
            'id_type'=>2
        ]);

        return view('confirm');
    }

    public function userToken(Request $request){

        $user = $request->user();
        $user->image_url = url('storage/images_events/' . $user->user_img);
        
        return response()->json(
            $user);
    }

    public function forgotPassword(Request $request) {
        $user = User::where('user_email', $request->correo)->first();
        $tempPassword = 'Vinx_'.rand(1000, 9999);
        $msg='Usuario no encontrado o sin registrar';
        if ($user) {
            $user->user_password = Hash::make($tempPassword);
            $user->save();
            $msg = 'Contraseña actualizada correctamente';
            return view('forgotPass', compact('tempPassword', 'msg'));
        } else {
            return view('forgotPass', compact('msg'));
        }
        
    }

    public function changeUserPassword(Request $request) {
        $user = User::where('user_id', $request->id)->first();
        if(Hash::check($request->password, $user->user_password)){
            if($request->user ==$user->user_user_name){
                $user->user_password = Hash::make($request->newpassword);
                $user->save();
                return redirect('http://localhost:5173/vinx');
            }else{
                $user->user_user_name = $request->user;
                $user->user_password = Hash::make($request->newpassword);
                $user->save();
                return redirect('http://localhost:5173/vinx');
            }
        }else{
            
            return response()->json(['message' => 'Datos incorrectos']);
        }
        
    }


    public function updateProfileImg(Request $request) {
         $user = User::where('user_id', $request->userId)->first();
         Storage::delete('public/images_events/' . $user->user_img);
         $imageName = $request->newImg->getClientOriginalName();
         $imageName = str_replace(' ', '_', $imageName);
         $request->newImg->storeAs('public/images_events', $imageName);
         $user->user_img = $imageName;
         $user->save();
         return redirect('http://localhost:5173/vinx');
        
        //return $request;
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
