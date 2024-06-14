<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $salt = md5('EstoEsUnSalt');
        $radom = mt_rand(1, 3);
        switch ($radom) {
            case 1:
                $carrera = 'Informática y Tecnologia Multimedia';
            case 2:
                $carrera = 'Medicina y Cirugía';
            case 3:
                $carrera = 'Ingeniería en Electrica';
            }
            $gen = mt_rand(1, 3);
            $num=rand(10000,39999);
            
            switch ($gen) {
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
            'user_img'=>$request->image,
            'user_password'=>md5($request->contrasena.''.$salt),
            'user_career'=>$carrera,
            'user_studentCarne'=>$carne,
            'user_illness'=>$request->user_illness.' '.$request->disease_name,
            'sleep_time'=>$request->sleep,
            'excercise_time'=>$request->activity,
            'id_type'=>2
        ]);

        return 'Usuario registrado con exito';
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
