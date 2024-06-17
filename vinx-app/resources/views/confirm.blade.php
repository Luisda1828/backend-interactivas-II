@extends('layouts.layoutConfirm')

@section('content')
<div class="flex flex-col justify-center items-center text-center">

    <h1 class="font-main text-titulo text-blue-3 mt-8">Usuario Registrado con exito.</h1>
    <h2 class="font-second text-subtitulo text-blue-2 mb-4">Gracias por usar Vinx para organizar tu tiempo.</h2>
    <h2 class="font-main text-texto text-blue-2 my-4">Regresa al menu principal para iniciar sesion y utilizar nuestros servicios</h2>
    <a href="http://localhost:5174/">
    <div class='bg-blue-3 font-main font-pesado text-subtitulo mb-[1rem] py-2 px-8 text-center rounded-full text-white'>
                Regresar
            </div>
    </a>
    
</div>


@endsection