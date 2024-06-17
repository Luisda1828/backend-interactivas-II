<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
        
        
        switch (rand(1, 3)) {
            case 1:
                $carrera = 'Informática y Tecnologia Multimedia';
            case 2:
                $carrera = 'Medicina y Cirugía';
            case 3:
                $carrera = 'Ingeniería en Electrica';
            default:
                $carrera = 'Informática y Tecnologia Multimedia';
            }

            
            $num=rand(10000,39999);
            
            switch (rand(1, 3)) {
                case 1:
                    $carne = 'A'.$num;
                case 2:
                    $carne = 'B'.$num;
                case 3:
                    $carne = 'C'.$num;
            }

        $newUser=User::create([
            'user_name'=>$request->nombre,
            'user_lastname'=>$request->apellido,
            'user_user_name'=>$request->usuario,
            'user_email'=>$request->correo,
            'user_img'=>$imageName,
            'user_password' => Hash::make($request->contrasena),
            'user_career'=>$carrera,
            'user_studentCarne'=>$carne,
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
